document.addEventListener("DOMContentLoaded", function () {
    function ClearButtonOne() {
        previewAvatar.style.display = "none";
        nonePrev.style.display = "block";
        clearButtonOne.style.display = "none";
        uploadNewButtonOne.style.display = "none";
        uploadButton.style.display = "block";
    }

    function ClearButtonTwo() {
        previewHero.style.display = "none";
        clearButtonTwo.style.display = "none";
        uploadNewButtonTwo.style.display = "none";
        imgSizeOne.style.display = "block";
        heroPrevNone.style.display = "block";
    }

    function ClearButtonThree() {
        previewHeroMin.style.display = "none";
        clearButtonThree.style.display = "none";
        uploadNewButtonThree.style.display = "none";
        imgSizeTwo.style.display = "block";
        heroImageMinNone.style.display = "block";
    }

    function uploadImage() {
        if (this.files && this.files.length) {
            previewAvatar.src = window.URL.createObjectURL(this.files[0]);
            avatarPrev.src = window.URL.createObjectURL(this.files[0]);
            avatarPrev.style.display = "block";
            previewAvatar.style.display = "block";
            nonePrev.style.display = "none";
            clearButtonOne.style.display = "inline-block";
            uploadButton.style.display = "none";
            uploadNewButtonOne.style.display = "block";
        }
    }

    function uploadHeroImage() {
        if (this.files && this.files.length) {
            previewHero.src = window.URL.createObjectURL(this.files[0]);
            previewHeroMinOne.src = window.URL.createObjectURL(this.files[0]);
            previewHeroMinOne.style.display = "block";
            heroPrevNone.style.display = "none";
            previewHero.style.display = "block";
            imgSizeOne.style.display = "none";
            uploadNewButtonTwo.style.display = "inline-block";
            clearButtonTwo.style.display = "inline-block";
        }
    }

    function uploadHeroImageMin() {
        if (this.files && this.files.length) {
            previewHeroMin.src = window.URL.createObjectURL(this.files[0]);
            previewHeroMinTwo.src = window.URL.createObjectURL(this.files[0]);
            heroImageMinNone.style.display = "none";
            previewHeroMin.style.display = "block";
            imgSizeTwo.style.display = "none";
            uploadNewButtonThree.style.display = "inline-block";
            clearButtonThree.style.display = "inline-block";
        }
    }


    const input = document.getElementById("avatar");
    const previewAvatar = document.getElementById("preview");
    const nonePrev = document.getElementById("nonePreview");
    const avatarPrev = document.getElementById("avatarPrev");
    const uploadButton = document.getElementById("uploadBtn");
    const uploadNewButtonOne = document.getElementById("uploadNew");
    const clearButtonOne = document.getElementById("clearButton");
    input.addEventListener("change", uploadImage);
    clearButtonOne.addEventListener("click", ClearButtonOne);

    const heroImage = document.getElementById("heroImage");
    const previewHero = document.getElementById("previewHero");
    const heroPrevNone = document.getElementById("previewHeroNone");
    const previewHeroMinOne = document.getElementById("previewHeroMinOne");
    const imgSizeOne = document.getElementById("imgSizeOne");
    const clearButtonTwo = document.getElementById("clearTwoButton");
    const uploadNewButtonTwo = document.getElementById("uploadTwoNew");
    heroImage.addEventListener("change", uploadHeroImage);
    clearButtonTwo.addEventListener("click", ClearButtonTwo);
    const heroImageMin = document.getElementById("heroImageMin");
    const previewHeroMin = document.getElementById("previewHeroMin");
    const heroImageMinNone = document.getElementById("heroImageMinNone");
    const previewHeroMinTwo = document.getElementById("previewHeroMinTwo");
    const imgSizeTwo = document.getElementById("imgSizeTwo");
    const clearButtonThree = document.getElementById("clearThreeButton");
    const uploadNewButtonThree = document.getElementById("uploadThreeNew");
    heroImageMin.addEventListener("change", uploadHeroImageMin);
    clearButtonThree.addEventListener("click", ClearButtonThree);
    let titlePreview = document.getElementById("title");
    titlePreview.addEventListener("change", function () {
        document.getElementById("titlePrev").innerText = titlePreview.value;
        document.getElementById("titlePrevTwo").innerText = titlePreview.value;
        if (titlePreview.value.length != "") {
            titlePreview.style.background = "#f7f7f7";
            titlePreview.style.borderBottom = "1px solid #2e2e2e";
        } else {
            titlePreview.style.background = "#fff";
            titlePreview.style.borderBottom = "1px solid #eaeaea";
        }
    });

    let subtitlePreview = document.getElementById("subtitle");
    subtitlePreview.addEventListener("change", function () {
        document.getElementById("subtitlePrev").innerText = subtitlePreview.value;
        document.getElementById("subtitlePrevTwo").innerText =
            subtitlePreview.value;
        if (subtitlePreview.value != "") {
            subtitlePreview.style.background = "#f7f7f7";
            subtitlePreview.style.borderBottom = "1px solid #2e2e2e";
        } else {
            subtitlePreview.style.background = "#fff";
            subtitlePreview.style.borderBottom = "1px solid #eaeaea";
        }
    });

    let authorPreview = document.getElementById("author");
    authorPreview.addEventListener("change", function () {
        document.getElementById("authorPrev").innerText = authorPreview.value;
        if (authorPreview.value != "") {
            authorPreview.style.background = "#f7f7f7";
            authorPreview.style.borderBottom = "1px solid #2e2e2e";
        } else {
            authorPreview.style.background = "#fff";
            authorPreview.style.borderBottom = "1px solid #eaeaea";
        }
    });

    let inputDate = document.getElementById("date");
    inputDate.addEventListener("change", function () {
        let date = new Date(inputDate.value);
        let day = date.getDate();
        let month = date.getMonth() + 1;
        let year = date.getFullYear();
        let formattedDate = `${day < 10 ? "0" + day : day}/${month < 10 ? "0" + month : month
            }/${year}`;
        document.getElementById("datePrev").innerText = formattedDate;
        if (inputDate.value != "") {
            inputDate.style.background = "#f7f7f7";
            inputDate.style.borderBottom = "1px solid #2e2e2e";
        } else {
            inputDate.style.background = "#fff";
            inputDate.style.borderBottom = "1px solid #eaeaea";
        }
    });
    const msgError = document.querySelector(".main__msg-error");
    const msgSubmit = document.querySelector(".main__msg-submit");

    function isValidateForm() {
        let title = document.getElementById("title").value;
        let subtitle = document.getElementById("subtitle").value;
        let avatar = document.getElementById("avatar").value;
        let author = document.getElementById("author").value;
        let date = document.getElementById("date").value;
        let heroImg = document.getElementById("heroImageMin").value;
        let heroImgMin = document.getElementById("heroImageMin").value;
        if (
            title === "" ||
            subtitle === "" ||
            avatar === "" ||
            author === "" ||
            date === "" ||
            heroImg === "" ||
            heroImgMin === ""
        ) {
            if (title === "") {
                document.getElementById("title").style.borderBottom =
                    "1px solid #e86961";
                document.querySelector(".main__title-required").style.display = "block";
            } else {
                document.getElementById("title").style.borderBottom =
                    "1px solid #2e2e2e";
                document.querySelector(".main__title-required").style.display = "none";
            }
            if (subtitle === "") {
                document.getElementById("subtitle").style.borderBottom =
                    "1px solid #e86961";
                document.querySelector(".main__subtitle-required").style.display =
                    "block";
            } else {
                document.getElementById("subtitle").style.borderBottom =
                    "1px solid #2e2e2e";
                document.querySelector(".main__subtitle-required").style.display =
                    "none";
            }
            if (date === "") {
                document.getElementById("date").style.borderBottom =
                    "1px solid #e86961";
                document.querySelector(".main__date-required").style.display = "block";
            } else {
                document.getElementById("date").style.borderBottom =
                    "1px solid #2e2e2e";
                document.querySelector(".main__date-required").style.display = "none";
            }
            if (author === "") {
                document.getElementById("author").style.borderBottom =
                    "1px solid #e86961";
                document.querySelector(".main__author-required").style.display =
                    "block";
            } else {
                document.getElementById("author").style.borderBottom =
                    "1px solid #2e2e2e";
                document.querySelector(".main__author-required").style.display = "none";
            }
            msgError.style.display = "block";
            msgSubmit.style.display = "none";
            return false;
        } else {
            msgSubmit.style.display = "block";
            msgError.style.display = "none";
            document.querySelector(".main__title-required").style.display = "none";
            document.querySelector(".main__subtitle-required").style.display = "none";
            document.querySelector(".main__author-required").style.display = "none";
            document.querySelector(".main__date-required").style.display = "none";
            return true;
        }
    }

    function getCheckRadioValue() {
        let elements = document.getElementsByName("publish");

        for (let i = 0, len = elements.length; i < len; i++)
            if (elements[i].checked) return elements[i].value;
    }

    const form = document.querySelector("#form");
    const publishButton = document.querySelector("#publishButton");

    function onPublishButtonClick() {
        const formData = new FormData(form);
        const data = {};
        let imageCount = 0;
        let valid = isValidateForm();
        if (valid === true) {
            formData.forEach(function (value, key) {
                if (key === "avatar" || key === "heroImage" || key === "heroImageMin") {
                    const imageInput = document.querySelector("#" + key);
                    if (imageInput.files.length > 0) {
                        const file = imageInput.files[0];
                        const reader = new FileReader();
                        reader.onload = function (event) {
                            data[key] = event.target.result;
                            imageCount++;
                            if (imageCount === 3) {
                                const post = getCheckRadioValue();
                                console.log(JSON.stringify(data));
                            }
                        };
                        reader.readAsDataURL(file);
                    }
                } else {
                    data[key] = value;
                }
            });
        }
    }

    publishButton.addEventListener("click", onPublishButtonClick);
});