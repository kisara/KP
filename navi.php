<nav>
      <div class="navbutton"><a href="?x=contact">Kontak</a></div>
    <?php if ($_SESSION['login']){ ?><div class="navbutton"><a href="?x=print">Cetak Data </a></div><? }?>
    <?php if ($_SESSION['level']=='admin'){ ?><div class="navbutton"><a href="?x=print">input nilai </a></div><? }?>
     <div class="navbutton"><a href="?x=daftar">Registrasi</a></div>
    <div class="navbutton"><a href="?x=pendaftar">Calon Siswa </a></div>
    <div class="navbutton"><a href="?x=info">Informasi PSB</a></div>
      <div class="navbutton"><a href="?x=home">Beranda</a></div>           
</nav> 