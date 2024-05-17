const avtNews = document.getElementById('avtNews');
const imagePreview = document.getElementById('imagePreview');

avtNews.addEventListener('change', function() {
  const file = this.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function(e) {
      imagePreview.src = e.target.result;
    }

    reader.readAsDataURL(file);
  }
});

// up hình đại diện

