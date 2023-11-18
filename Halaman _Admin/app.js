document.addEventListener("DOMContentLoaded", function () {
    const imageInput = document.getElementById("imageInput");
    const imagePreview = document.getElementById("imagePreview");

    imageInput.addEventListener("change", function () {
        previewImage(this);
    });

    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
});


document.addEventListener("DOMContentLoaded", function () {
    const imageInput = document.getElementById("imageInput1");
    const imagePreview = document.getElementById("imagePreview1");

    imageInput.addEventListener("change", function () {
        previewImage(this);
    });

    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const imageInput = document.getElementById("imageInput2");
    const imagePreview = document.getElementById("imagePreview2");

    imageInput.addEventListener("change", function () {
        previewImage(this);
    });

    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const imageInput = document.getElementById("imageInput3");
    const imagePreview = document.getElementById("imagePreview3");

    imageInput.addEventListener("change", function () {
        previewImage(this);
    });

    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const imageInput = document.getElementById("imageInput4");
    const imagePreview = document.getElementById("imagePreview4");

    imageInput.addEventListener("change", function () {
        previewImage(this);
    });

    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
});