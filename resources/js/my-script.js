/* ================================================================
// Kode untuk membuat fitur preview gambar profil
// Dipakai pada form register dan form update
==================================================================*/

let inputGambarProfile = document.getElementById('gambar_profil');
let displayGambarProfile = document.getElementById('display_gambar_profil');

if (inputGambarProfile) {
  inputGambarProfile.addEventListener("change", previewGambar);

  function previewGambar() {
    const [file] = inputGambarProfile.files;
    displayGambarProfile.src = URL.createObjectURL(file);
  }

  // agar ketika gambar profil di klik, file upload juga langsung terbuka
  displayGambarProfile.addEventListener("click", () =>
    inputGambarProfile.click()
  );
}

/* ================================================================
// Kode untuk membuat gambar pilihan background profil bisa di klik
// Dipakai pada form register dan form update
==================================================================*/

let pilihanBg = document.getElementsByClassName('pilihan-background-profil');
let inputanBg = document.getElementById('background_profil');

if (pilihanBg) {
  [...pilihanBg].forEach(element => element.addEventListener("click", updateBg))

  function updateBg() {
    inputanBg.value = this.children[0].innerHTML;
  }
}

/* ================================================================
// Kode untuk mengisi atribut action dari tag form untuk delete user
// Dipakai dalam halaman home
==================================================================*/

let btnHapus = document.getElementsByClassName('btn-hapus');
let formDelete = document.getElementById('deleteForm');

if (btnHapus) {
  [...btnHapus].forEach(element => element.addEventListener("click", inputId))

  function inputId() {
    let idHapus = this.getAttribute('data-id');
    formDelete.setAttribute('action', '/users/' + idHapus);
  }
}