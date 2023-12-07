document.addEventListener("DOMContentLoaded", function () {
    const imageInput2 = document.getElementById("imageInput2");
    const imagePreview2 = document.getElementById("imagePreview2");

    imageInput2.addEventListener("change", function () {
        previewImage(this);
    });

    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview2.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const imageInput3 = document.getElementById("imageInput3");
    const imagePreview3 = document.getElementById("imagePreview3");

    imageInput3.addEventListener("change", function () {
        previewImage(this);
    });

    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview3.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
});


document.addEventListener("DOMContentLoaded", function () {
    const imageInput2 = document.getElementById("imageInput2");
    const imagePreview2 = document.getElementById("imagePreview2");

    imageInput2.addEventListener("change", function () {
        previewImage(this);
    });

    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview2.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
});
    




