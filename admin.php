<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/src/styles/reset.css" />
    <link rel="stylesheet" href="/src/styles/adminka.css" />
    <title>Admin</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container">
                <div class="header__inner">
                    <div class="header__logo">
                        <img class="logo" src="/src/images/Logo.png" alt="" />
                    </div>
                    <div class="header__menu">
                        <div class="header__avatar">N</div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="main__container">
                <div class="main__inner">
                    <div class="main__top-inner">
                        <div class="main__top">
                            <h2 class="main__title">New Post</h2>
                            <p class="main__subtitle">
                                Fill out the form bellow and publish your article
                            </p>
                        </div>
                    </div>
                    <div class="main__info">
                        <div class="main__msg-error msg">
                            Whoops! Some fields need your attention :o
                        </div>
                        <div class="main__msg-submit msg">Publish Complete!</div>
                        <div class="main__info-container">
                            <div class="main__form-inner-2">
                                <div class="main__info-title">Main Information</div>
                                <form method="post" action="" class="main__info-form" id="form">
                                    <div class="main__button">
                                        <button class="main__publish" type="button" id="publishButton">
                                            Publish
                                        </button>
                                    </div>
                                    <div class="main__form-box">
                                        <div class="main__box-inner">
                                            <div class="main__form-inner">
                                                <label class="main__form-label-1">
                                                    Title
                                                    <input type="text" class="main__form-input" id="title" name="title"
                                                        maxlength="30" required />
                                                </label>
                                                <div class="main__title-required required">Title is required.</div>
                                                <label class="main__form-label-1">
                                                    Short description
                                                    <input type="text" class="main__form-input" name="subtitle"
                                                        id="subtitle" maxlength="70" required />
                                                </label>
                                                <div class="main__subtitle-required required">Short description is
                                                    required.</div>
                                                <label class="main__form-label-1">
                                                    Author name
                                                    <input type="text" class="main__form-input" name="author"
                                                        id="author" maxlength="30" required />
                                                </label>
                                                <div class="main__author-required required">Author name is required.
                                                </div>
                                                <div class="main__form-avatar">
                                                    <div class="main__upload-avatar">
                                                        <div class="main__form-label-1">Author Photo</div>
                                                        <label class="main__form-label-1 avatar__field">
                                                            <div class="main__form-img">
                                                                <img src="/src/images/camera.png" alt="Preview"
                                                                    class="image__cameraPrev" id="nonePreview" />
                                                                <img src="" alt="Preview" id="preview"
                                                                    class="image_prev" />
                                                            </div>
                                                            <input type="file" class="main__form-input" name="avatar"
                                                                id="avatar" required />
                                                            <div class="main__upload" id="uploadBtn">
                                                                Upload
                                                            </div>
                                                            <div class="main__upload upload__new" id="uploadNew">
                                                                Upload New
                                                            </div>
                                                            <button class="main__clear-btn" type="reset"
                                                                id="clearButton">
                                                                Remove
                                                            </button>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="main__form-label-1">
                                                    Publish Date
                                                    <input type="date" class="main__form-input" id="date" name="date"
                                                        required />
                                                </label>
                                                <div class="main__date-required required">Date is required.</div>
                                                <div class="main__form-hero">
                                                    <div class="main__upload-avatar main__upload-hero">
                                                        <label class="main__form-label-1 hero__field">
                                                            Hero Image
                                                            <div class="main__hero-img">
                                                                <img src="/src/images/Button.png" alt="Preview"
                                                                    id="previewHeroNone" class="prevHeroNone" />
                                                                <img src="" alt="Preview" id="previewHero"
                                                                    class="image_prev" />
                                                            </div>
                                                            <input type="file" class="main__form-input" name="heroImage"
                                                                id="heroImage" required />
                                                        </label>
                                                        <p class="main__img-size" id="imgSizeOne">
                                                            Size up to 10mb. Format: png, jpeg, gif.
                                                        </p>
                                                        <div class="main__upload upload__new" id="uploadTwoNew">
                                                            Upload New
                                                        </div>
                                                        <button class="main__clear-btn" type="reset"
                                                            id="clearTwoButton">
                                                            Remove
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="main__form-hero">
                                                    <div class="main__upload-avatar main__upload-hero">
                                                        <label class="main__form-label-1 hero__field">
                                                            Hero Image
                                                            <div class="main__hero-two">
                                                                <img src="/src/images/Button.png" alt="Preview"
                                                                    class="prevHeroNone" id="heroImageMinNone" />
                                                                <img src="" alt="Preview" id="previewHeroMin"
                                                                    class="image_prev" />
                                                            </div>
                                                            <input type="file" class="main__form-input"
                                                                name="heroImageMin" id="heroImageMin" required />
                                                        </label>
                                                        <p class="main__img-size" id="imgSizeTwo">
                                                            Size up to 5mb. Format: png, jpeg, gif.
                                                        </p>
                                                        <div class="main__upload upload__new" id="uploadThreeNew">
                                                            Upload New
                                                        </div>
                                                        <button class="main__clear-btn" type="reset"
                                                            id="clearThreeButton">
                                                            Remove
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="main__posts-preview">
                                                <div class="main__article-preview">
                                                    <label class="main__form-label-1 preview">
                                                        Article preview
                                                        <div class="main__preview">
                                                            <div class="main__preview-post">
                                                                <div class="main__post-dots">
                                                                    <div class="main__img-dots">
                                                                        <svg width="4" height="4" viewBox="0 0 4 4"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <circle cx="2" cy="2" r="2"
                                                                                fill="#D9D9D9" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="main__img-dots">
                                                                        <svg width="4" height="4" viewBox="0 0 4 4"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <circle cx="2" cy="2" r="2"
                                                                                fill="#D9D9D9" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="main__img-dots">
                                                                        <svg width="4" height="4" viewBox="0 0 4 4"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <circle cx="2" cy="2" r="2"
                                                                                fill="#D9D9D9" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="main__post-title" id="titlePrev"></div>
                                                                <div class="main__post-subtitle" id="subtitlePrev">
                                                                </div>
                                                                <div class="main__post-image">
                                                                    <img src="" id="previewHeroMinOne" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="main__article-preview">
                                                    <label class="main__form-label-1 preview preview-post">
                                                        Post card preview
                                                        <div class="main__recent-inner">
                                                            <div class="main__recent-post">
                                                                <div class="main__image__box">
                                                                    <img src="/src/images/Frame.png"
                                                                        id="previewHeroMinTwo" />
                                                                </div>
                                                                <div class="main__titles-box">
                                                                    <div class="main__recent-title" id="titlePrevTwo">
                                                                    </div>
                                                                    <p class="main__recent-subtitle"
                                                                        id="subtitlePrevTwo"></p>
                                                                </div>
                                                                <div class="main__user-box">
                                                                    <div class="main__author">
                                                                        <img src="/src/images/Frame.png"
                                                                            id="avatarPrev" />
                                                                    </div>
                                                                    <div class="main__name" id="authorPrev">
                                                                        Enter author name
                                                                    </div>
                                                                    <div class="main__date" id="datePrev"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div>
                                    </div>
                                    <div class="main__info-container container_content">
                                        <div class="main__info-title main__content-title">
                                            Content
                                        </div>
                                        <label class="main__form-label-1 label__two">
                                            Post content (plain text)
                                            <textarea class="main__form-text" name="content" id="content"
                                                placeholder="Type anything you want ..." required></textarea>
                                        </label>
                                        <label class="main__form-radios">
                                            Featured
                                            <input type="radio" value="1" class="main__form-radio" name="publish"
                                                id="featured" required></input>
                                            Most Recent
                                            <input type="radio" value="0" class="main__form-radio" name="publish"
                                                id="recent" required></input>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="/src/js/admin.js"></script>
</body>

</html>