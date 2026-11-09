<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Produk | Second Cell</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f7f7f7;
            margin: 0;
            padding: 40px;
        }

        .form-wrapper {
            max-width: 700px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        h1 {
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #dddddd;
            border-radius: 8px;
            box-sizing: border-box;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 8px;
            background: #EA580C;
            color: white;
            font-weight: 600;
            cursor: pointer;
        }

        button:hover {
            background: #c94d0b;
        }
    </style>

</head>

<body>

    <div class="form-wrapper">

        <h1>Tambah Produk</h1>

        <form
            action=""
            method="POST"
            enctype="multipart/form-data"
        >

            <div class="form-group">
                <label for="nama_produk">
                    Nama Produk
                </label>

                <input
                    type="text"
                    id="nama_produk"
                    name="nama_produk"
                    required
                >
            </div>


            <div class="form-group">
                <label for="deskripsi">
                    Deskripsi
                </label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                ></textarea>
            </div>


            <div class="form-group">
                <label for="harga">
                    Harga
                </label>

                <input
                    type="number"
                    id="harga"
                    name="harga"
                    required
                >
            </div>


            <div class="form-group">
                <label for="stok">
                    Stok
                </label>

                <input
                    type="number"
                    id="stok"
                    name="stok"
                    required
                >
            </div>


            <div class="form-group">
                <label for="kategori">
                    Kategori
                </label>

                <select
                    id="kategori"
                    name="kategori"
                    required
                >

                    <option value="">
                        Pilih kategori
                    </option>

                    <option value="Samsung">
                        Samsung
                    </option>

                    <option value="iPhone">
                        iPhone
                    </option>

                    <option value="Oppo">
                        Oppo
                    </option>

                    <option value="Vivo">
                        Vivo
                    </option>

                    <option value="Xiaomi">
                        Xiaomi
                    </option>

                    <option value="Aksesoris">
                        Aksesoris
                    </option>

                </select>
            </div>


            <div class="form-group">
                <label for="gambar">
                    Gambar Produk
                </label>

                <input
                    type="file"
                    id="gambar"
                    name="gambar"
                    accept="image/*"
                    required
                >
            </div>


            <button type="submit">
                Simpan Produk
            </button>

        </form>

    </div>

</body>

</html>