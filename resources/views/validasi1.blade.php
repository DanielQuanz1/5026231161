<html>
    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container mt-5">
        <form id="formPendaftaran">
            <h3>Form Pendaftaran</h3>
            <div class="form-group">
                <label for="nrp">NRP:</label>
                <input type="text" id="nrp" class="form-control" placeholder="Silahkan diisi 10 digit NRP, harus angka, harus diisi">
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" class="form-control" placeholder="Isikan nama Peserta yang Valid">
            </div>
            <button type="submit" class="btn btn-success">Daftar</button>
        </form>
    </div>

    <script>
        document.getElementById('formPendaftaran').addEventListener('submit', function(event) {
            event.preventDefault(); 

            const nama = document.getElementById('nama').value.trim();

            
            if (nrp.length == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Kesalahan Input',
                    text: 'NRP tidak boleh kosong.'
                });
                return false;
            }
            
            if (nama.length == 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Kesalahan Input',
                    text: 'Nama tidak boleh kosong.'
                });
                return false;
            }
            
            if (nama.length < 2) {
                Swal.fire({
                    icon: 'error',
                    title: 'Kesalahan Input',
                    text: 'Nama harus terdiri dari minimal 2 huruf.'
                });
                return false;
            }

            if (/\d/.test(nama)) {
                Swal.fire({
                    icon: 'error',
                    title: 'Kesalahan Input',
                    text: 'Nama tidak boleh mengandung angka.'
                });
                return false;
            }

            this.submit();
        });
    </script>
</body>

</html>