function getLaporan() {
    var dari = $("#dari").val();
    var sampai = $("#sampai").val();
    var selected = $("#Jenis").val();
    window.location.href = "home.php?page=laporan&aksi=tambah?=" + selected + "&dari=" + dari + "&sampai=" + sampai;
}