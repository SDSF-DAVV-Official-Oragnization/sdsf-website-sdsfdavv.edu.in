<!-- ===== ARTICLE POPUP MODAL (Interactive Reader) ===== -->
<div class="article-modal-backdrop" id="articleModal" style="display:none;" onclick="closeArticleModal(event)">
    <div class="article-modal-container" onclick="event.stopPropagation()">
        <button class="modal-close-btn" onclick="closeArticleModal()" aria-label="Close article">
            <i class="fas fa-times"></i>
        </button>
        <div class="modal-article-scroll" id="modalArticleContent">
            <!-- Dynamically filled by modal.js -->
        </div>
    </div>
</div>
