function setupImageSwitching(mainImageId, prodElements) {
    const mainImage = document.getElementById(mainImageId);
    prodElements.forEach((prodElement, index) => {
        prodElement.addEventListener('click', () => {
            const imagePath = prodElement.dataset.image;
            if (imagePath) {
                mainImage.src = imagePath;
            }
        });
    });
}

// Example usage
const prodElements = document.querySelectorAll('.more-products .prod');
setupImageSwitching('mainImage', prodElements);