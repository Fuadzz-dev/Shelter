# TODO: Support Foto & Video Ukuran Besar di Laporan Helpdesk

## Steps:

- [x] Step 1: Buat TODO.md
- [x] Step 2: Edit `app/Http/Controllers/Pegawai/PegawaiController.php`
    - Update validasi: tambah mime video (mp4, mov, avi, webm, mkv)
    - Tingkatkan max upload size dari 5MB → 50MB
- [x] Step 3: Edit `resources/views/pegawai/membuat_laporan_pegawai.blade.php`
    - Update `accept` attribute pada file input → `image/*,video/*`
    - Update teks petunjuk format & ukuran
    - Update JavaScript untuk menampilkan preview video (icon video)
- [x] Step 4: Edit `resources/views/pegawai/detail_laporan_pegawai.blade.php`
    - Tambahkan logika untuk menampilkan video player jika file adalah video
    - Tetap tampilkan gambar sebagai `<img>` jika file adalah gambar

## Testing:

- [ ] Upload laporan dengan beberapa foto (>1) ukuran besar
- [ ] Upload laporan dengan video (mp4)
- [ ] Upload laporan dengan campuran foto dan video
- [ ] Verifikasi file tersimpan di `public/simpan_foto/`
