import os
import sys
from PIL import Image, ImageOps

# helper script to resize & compress high-res induction photos for web
def process_images():
    script_dir = os.path.dirname(os.path.abspath(__file__))
    base_dir = os.path.join(script_dir, "photoes", "Induction 2026")
    thumbs_dir = os.path.join(base_dir, "thumbs")
    optimized_dir = os.path.join(base_dir, "optimized")

    os.makedirs(thumbs_dir, exist_ok=True)
    os.makedirs(optimized_dir, exist_ok=True)

    extensions = ('.jpg', '.jpeg', '.png', '.webp')
    files = [f for f in os.listdir(base_dir) if f.lower().endswith(extensions) and os.path.isfile(os.path.join(base_dir, f))]
    
    print(f"Processing {len(files)} induction images...")
    
    total_orig = 0
    total_opt = 0
    total_thumb = 0

    for idx, filename in enumerate(files, 1):
        src_path = os.path.join(base_dir, filename)
        orig_size = os.path.getsize(src_path)
        total_orig += orig_size

        thumb_path = os.path.join(thumbs_dir, filename)
        opt_path = os.path.join(optimized_dir, filename)

        try:
            with Image.open(src_path) as img:
                # Transpose EXIF orientation so photos aren't rotated
                img = ImageOps.exif_transpose(img)

                if img.mode in ("RGBA", "P"):
                    img_rgb = img.convert("RGB")
                else:
                    img_rgb = img

                # 1. Optimized display version (max 1600px width/height)
                opt_img = img_rgb.copy()
                opt_img.thumbnail((1600, 1600), Image.Resampling.LANCZOS)
                opt_img.save(opt_path, "JPEG", quality=82, optimize=True, progressive=True)
                opt_size = os.path.getsize(opt_path)
                total_opt += opt_size

                # 2. Thumbnail version (max 400px width/height)
                thumb_img = img_rgb.copy()
                thumb_img.thumbnail((400, 400), Image.Resampling.LANCZOS)
                thumb_img.save(thumb_path, "JPEG", quality=75, optimize=True)
                thumb_size = os.path.getsize(thumb_path)
                total_thumb += thumb_size

                print(f"[{idx}/{len(files)}] {filename}: {orig_size//1024}KB -> opt: {opt_size//1024}KB, thumb: {thumb_size//1024}KB")
        except Exception as e:
            print(f"Error processing {filename}: {e}", file=sys.stderr)

    print("-" * 50)
    print(f"Original total size : {total_orig / (1024*1024):.2f} MB")
    print(f"Optimized total size: {total_opt / (1024*1024):.2f} MB ({(1 - total_opt/total_orig)*100:.1f}% reduction)")
    print(f"Thumbs total size   : {total_thumb / (1024*1024):.2f} MB ({(1 - total_thumb/total_orig)*100:.1f}% reduction)")

if __name__ == "__main__":
    process_images()
