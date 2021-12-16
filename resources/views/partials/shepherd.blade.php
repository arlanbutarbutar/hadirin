<script src="https://cdn.jsdelivr.net/npm/shepherd.js@5.0.1/dist/js/shepherd.js"></script>
<script>
    const tour = new Shepherd.Tour({
      defaultStepOptions: {
        cancelIcon: {
          enabled: true
        },
        classes: 'shepherd-theme-dark',
        scrollTo: { behavior: 'smooth', block: 'center' }
      }
    });
    // hello
    tour.addStep({
      title: 'Hai guys, selamat datang di Hadirin',
      text: `Belum tau cara pakai Hadirin!\ Gunakan \`Tur\` kami untuk menuntun kehadiran kamu hari ini.`,
      attachTo: {
        element: '.hello',
        on: 'bottom'
      },
      buttons: [
        {
          action() {
            return this.cancel();
          },
          classes: 'shepherd-button-secondary',
          text: 'Ngak'
        },
        {
          action() {
            return this.next();
          },
          text: 'Ikuti Tur'
        }
      ],
      id: 'creating'
    });
    // card absen
    tour.addStep({
      title: 'Pilih Absen',
      text: `Ada 4 pilihan absen buat kamu, silakan memilih sesuai tingkat pendidikan yang sedang kamu jalani yah`,
      attachTo: {
        element: '.card-absen',
        on: 'top'
      },
      buttons: [
        {
          action() {
            return this.next();
          },
          text: 'Lanjut'
        }
      ],
      id: 'creating'
    });
    // absen sd
    tour.addStep({
      title: 'Sekolah Dasar',
      text: `Hai anak-anak, kamu sekolah dasar mau absen? klik tombol absennya yah`,
      attachTo: {
        element: '.absen-sd',
        on: 'bottom'
      },
      buttons: [
        {
          action() {
            return this.next();
          },
          text: 'Lanjut'
        }
      ],
      id: 'creating'
    });
    // absen smp
    tour.addStep({
      title: 'Sekolah Menengah Pertama',
      text: `Hai siswa-siswi ku, kamu sekolah menengah pertama mau absen? klik tombol absennya yah`,
      attachTo: {
        element: '.absen-smp',
        on: 'bottom'
      },
      buttons: [
        {
          action() {
            return this.next();
          },
          text: 'Lanjut'
        }
      ],
      id: 'creating'
    });
    // absen sma
    tour.addStep({
      title: 'Sekolah Menengah Atas',
      text: `Hai siswa kece, kamu sekolah menengah atas mau absen? klik tombol absennya yah`,
      attachTo: {
        element: '.absen-sma',
        on: 'bottom'
      },
      buttons: [
        {
          action() {
            return this.next();
          },
          text: 'Lanjut'
        }
      ],
      id: 'creating'
    });
    // absen univ
    tour.addStep({
      title: 'Universitas',
      text: `Hai guys, kamu udah kuliah yah... mau absen? klik tombol absennya yah`,
      attachTo: {
        element: '.absen-univ',
        on: 'bottom'
      },
      buttons: [
        {
          action() {
            return this.cancel();
          },
          classes: 'shepherd-button-secondary',
          text: 'Keluar'
        },
        {
          action() {
            return this.next();
          },
          text: 'Lanjut'
        }
      ],
      id: 'creating'
    });
    // signin
    tour.addStep({
      title: 'Daftar Akun',
      text: `Halo bapak/ibu guru atau dosen, mau buat absensi kelas yah? silakan daftar terlebih dahulu untuk buat kelasnya yah`,
      attachTo: {
        element: '.signin',
        on: 'left'
      },
      buttons: [
        {
          action() {
            return this.next();
          },
          text: 'Selesai'
        }
      ],
      id: 'creating'
    });
    // thks
    tour.addStep({
      title: 'Tur Berakhir',
      text: `Terima kasih sudah menggunakan tur kami ini, semoga bisa menjelaskan tujuan kami dengan aplikasi Hadirin ini :)`,
      attachTo: {
        element: '.thks',
        on: 'top'
      },
      buttons: [
        {
          action() {
            return this.next();
          },
          text: 'Byee'
        }
      ],
      id: 'creating'
    });
  
    tour.start();
</script>