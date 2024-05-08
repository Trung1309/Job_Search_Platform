const hinhDaiDien = document.getElementById('hinhDaiDien');
const imagePreview = document.getElementById('imagePreview');

hinhDaiDien.addEventListener('change', function() {
  const file = this.files[0];

  if (file) {
    const reader = new FileReader();

    reader.onload = function(e) {
      imagePreview.src = e.target.result;
    }

    reader.readAsDataURL(file);
  }
});
