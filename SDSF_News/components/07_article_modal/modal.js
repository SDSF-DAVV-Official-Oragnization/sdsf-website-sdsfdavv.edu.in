// In-memory articles for quick pop-up reader
const newsDatabase = {
    1: {
        title: "Orange Tech Placement Drive: A Resounding Success",
        category: "Placements & Careers",
        date: "September 2, 2026",
        author: "Lorem Ipsum Bureau",
        image: "../photoes/slide_image_event.jpeg",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."
        ]
    },
    2: {
        title: "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",
        category: "Hackathons & Tech",
        date: "September 1, 2026",
        time: "02:15 PM",
        views: "479 views",
        readTime: "4 min read",
        author: "Lorem Ipsum Desk",
        image: "../photoes/hack_hive.png",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt."
        ]
    },
    3: {
        title: "Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim",
        category: "Placements & Careers",
        date: "August 28, 2026",
        time: "05:00 PM",
        views: "1,120 views",
        readTime: "3 min read",
        author: "Lorem Ipsum Desk",
        image: "../photoes/i2.png",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate."
        ]
    },
    4: {
        title: "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium",
        category: "Research & AI",
        date: "August 24, 2026",
        time: "11:45 AM",
        views: "640 views",
        readTime: "5 min read",
        author: "Lorem Ipsum Desk",
        image: "../photoes/about_ai.png",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."
        ]
    },
    5: {
        title: "Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur",
        category: "Campus & Culture",
        date: "August 20, 2026",
        time: "09:30 AM",
        views: "580 views",
        readTime: "3 min read",
        author: "Lorem Ipsum Desk",
        image: "../photoes/indexhero3.jpg",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae."
        ]
    },
    6: {
        title: "Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua",
        category: "Featured Story",
        date: "September 2, 2026",
        time: "08:00 AM",
        views: "2,845 views",
        readTime: "6 min read",
        author: "Lorem Ipsum Bureau",
        image: "../photoes/indexhero4.jpg",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.",
            "Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus."
        ]
    },
    7: {
        title: "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti",
        category: "Hackathons & Tech",
        date: "September 2, 2026",
        time: "12:00 PM",
        views: "810 views",
        readTime: "3 min read",
        author: "Lorem Ipsum Desk",
        image: "../photoes/hack_hive.png",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."
        ]
    },
    8: {
        title: "Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates",
        category: "Academics & Curriculum",
        date: "August 30, 2026",
        time: "04:15 PM",
        views: "540 views",
        readTime: "4 min read",
        author: "Lorem Ipsum Desk",
        image: "../photoes/indexhero1.jpg",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere."
        ]
    },
    9: {
        title: "Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime",
        category: "Campus & Culture",
        date: "July 19, 2026",
        time: "11:20 AM",
        views: "1,728 views",
        readTime: "3 min read",
        author: "Lorem Ipsum Desk",
        image: "../photoes/i1.png",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ]
    },
    10: {
        title: "Omnis voluptas assumenda est omnis dolor repellendus temporibus autem quibusdam et aut officiis",
        category: "Placements & Careers",
        date: "August 26, 2026",
        time: "03:40 PM",
        views: "1,442 views",
        readTime: "4 min read",
        author: "Lorem Ipsum Desk",
        image: "../photoes/i2.png",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ]
    },
    11: {
        title: "Itaque earum rerum hic tenetur a sapiente delectus ut aut reiciendis voluptatibus maiores alias consequatur",
        category: "Research & Alumni",
        date: "July 19, 2026",
        time: "01:10 PM",
        views: "1,053 views",
        readTime: "4 min read",
        author: "Lorem Ipsum Desk",
        image: "../photoes/i3.png",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ]
    },
    12: {
        title: "SDSF Welcomes “SDSF Ke Raja” with Grandeur and Devotion",
        subtitle: "A vibrant celebration of faith, togetherness, and student spirit at the School of Data Science & Forecasting",
        category: "Campus & Culture • Festive Special",
        date: "September 14, 2026",
        time: "10:30 AM",
        views: "1,840 views",
        readTime: "4 min read",
        author: "SDSF Student Press & Cultural Desk",
        image: "photoes_news/Ganesh Ji 2026.jpg",
        paragraphs: [
            "<em>A vibrant celebration of faith, togetherness, and student spirit at the School of Data Science &amp; Forecasting</em>",
            "<strong>14 September 2026 | School of Data Science &amp; Forecasting (SDSF), DAVV, Indore</strong>",
            "The School of Data Science &amp; Forecasting (SDSF), DAVV, Indore, came alive with devotion, enthusiasm, and festive spirit on 14th September 2026 as students and members of the SDSF family gathered to celebrate the auspicious Agaman (arrival) of Lord Ganesha, lovingly welcomed as “SDSF Ke Raja.” 🐘🌺",
            "The celebration marked the beginning of a spiritually uplifting and joyful period for the SDSF community. With beautifully decorated surroundings, vibrant traditional arrangements, and the chants of “Ganapati Bappa Morya!”, the campus radiated an atmosphere of positivity and togetherness.",
            "<strong>🙏 A Grand Agaman of Bappa</strong><br>The arrival of SDSF Ke Raja was celebrated with great excitement as students came together to welcome Bappa with traditional rituals and heartfelt devotion. The campus echoed with chants and devotional music, creating a memorable beginning to the festivities. Students from different semesters actively participated in the arrangements, contributing their time, creativity, and energy to make the celebration special. From decorations and event coordination to devotional activities, the entire celebration reflected the collaborative spirit of SDSF.",
            "<strong>🎶 Bhajan Sandhya — Music, Devotion &amp; Togetherness</strong><br>One of the highlights of the celebration was the Bhajan Sandhya, where students from different semesters came together to offer their musical tributes to Lord Ganesha. The evening witnessed soulful bhajans, devotional songs, and collective chanting, with students taking turns to showcase their musical talents. The atmosphere became especially vibrant as students joined in the singing, transforming the gathering into a beautiful evening of music, faith, and fellowship. The Bhajan Sandhya also provided a wonderful opportunity for students across different batches and semesters to interact, participate, and celebrate together beyond the classroom.",
            "<strong>🎨 Students Take the Lead</strong><br>The festivities were not limited to prayers and bhajans. Students enthusiastically hosted and participated in several activities, taking responsibility for different aspects of the celebration. From creative decorations, rangoli, event arrangements, anchoring, photography, music, and coordination to managing the overall festive setup, students played an active role throughout the celebration. Their enthusiasm and teamwork demonstrated the strong sense of community that exists within SDSF. Every contribution, whether big or small, helped turn the occasion into a memorable celebration.",
            "<strong>🌸 A Celebration Beyond the Classroom</strong><br>The celebration of SDSF Ke Raja was more than a religious observance—it became a celebration of unity, creativity, culture, and belonging. Students and faculty came together to share moments of joy and devotion, strengthening the bond within the SDSF community. The festivities provided a refreshing break from academic routines while giving students an opportunity to showcase their talents, take initiative, and work together as a team. As the celebrations concluded for the day, the spirit of “Ganapati Bappa Morya” remained alive across the SDSF campus, leaving behind memories of smiles, music, devotion, and togetherness.",
            "<strong>✨ SDSF Welcomes Bappa</strong><br>With hearts filled with devotion and the campus filled with festive energy, SDSF proudly welcomed “SDSF Ke Raja” on 14th September 2026. The celebration beautifully captured the essence of Ganesh Chaturthi—faith in the heart, joy in togetherness, and positivity in every beginning.<br><br><span style='font-size:1.15rem; color:#c2410c; font-weight:700;'>Ganapati Bappa Morya! Mangal Murti Morya! 🌺🙏</span>"
        ]
    },
    13: {
        title: "Vel illum qui dolorem eum fugiat quo voluptas nulla pariatur at vero eos et accusamus et iusto odio",
        category: "Academics & Admissions",
        date: "August 16, 2026",
        time: "02:25 PM",
        views: "538 views",
        readTime: "3 min read",
        author: "Lorem Ipsum Desk",
        image: "../photoes/dark1.png",
        paragraphs: [
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ]
    }
};

function openArticleModal(articleId) {
    const article = newsDatabase[articleId];
    if (!article) return;

    const modal = document.getElementById("articleModal");
    const container = document.getElementById("modalArticleContent");
    if (!modal || !container) return;

    let paragraphsHtml = "";
    article.paragraphs.forEach((p) => {
        paragraphsHtml += `<p>${p}</p>`;
    });

    container.innerHTML = `
        <span class="modal-category-tag"><i class="fas fa-tag"></i> ${article.category}</span>
        <h2 class="modal-article-title">${article.title}</h2>
        <div class="modal-article-meta">
            <span><i class="fas fa-pen-nib"></i> ${article.author}</span>
            <span>&bull;</span>
            <span><i class="far fa-calendar-alt"></i> ${article.date}</span>
            <span>&bull;</span>
            <span><i class="far fa-clock"></i> ${article.readTime}</span>
            <span>&bull;</span>
            <span><i class="far fa-eye"></i> ${article.views}</span>
        </div>
        <div class="modal-media-wrapper">
            <img src="${article.image}" alt="${article.title}">
        </div>
        <div class="modal-article-text">
            ${paragraphsHtml}
        </div>
    `;

    modal.style.display = "flex";
    document.body.style.overflow = "hidden";
}

function closeArticleModal(event) {
    const modal = document.getElementById("articleModal");
    if (modal) {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    }
}

// Close on Escape Key
document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
        closeArticleModal();
    }
});
