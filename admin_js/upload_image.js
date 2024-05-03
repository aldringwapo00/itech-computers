
    // document.getElementById('product-photo').addEventListener('change', function(event) {
    //     const fileInput = event.target;
    //     const file = fileInput.files[0];
    //     const formImageContainer = document.getElementById('form_image_container');
    //     const reader = new FileReader();

    //     reader.onload = function() {
    //         const image = new Image();
    //         image.src = reader.result;
    //         image.alt = 'Product Image';
    //         formImageContainer.innerHTML = '';
    //         formImageContainer.appendChild(image);
    //     }

    //     reader.readAsDataURL(file);
    // });



    document.getElementById('product-photo').addEventListener('change', function(event) {
        const fileInput = event.target;
        const files = fileInput.files;

        if (files.length === 0) {
            // No file selected
            return;
        }

        const file = files[0];
        const formImageContainer = document.getElementById('form-image-container');
        const reader = new FileReader();

        reader.onload = function() {
            const image = new Image();
            image.src = reader.result;
            image.alt = 'Product Image';
            formImageContainer.innerHTML = ''; // Clear existing content
            formImageContainer.appendChild(image);
        }

        reader.readAsDataURL(file);
    });







    document.getElementById('btn-insert').addEventListener('click', function() {
        document.getElementById('product-form').submit();
    });