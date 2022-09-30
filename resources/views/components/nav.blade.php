<style>
    nav {
        display: flex;
        justify-content: center;
    }

    nav a {
        padding: 10px;
        text-decoration: none;
    }

    h1 {
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>


<nav>
    <a href="<?= route("beranda", $nama) ?>">Home</a>
    <a href="<?= route("daftar") ?>">Daftar</a>
    <a href="<?= route("masuk") ?>">Masuk</a>
    <a href="<?= route("tamu") ?>">Tamu</a>
    <a href="<?= route("tentang-saya") ?>">Tentang saya</a>
</nav>