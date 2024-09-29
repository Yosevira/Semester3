import java.util.ArrayList;
import java.util.List;
import java.util.Objects;
import java.util.Scanner;

public class testKonser {
    public static void main(String[] args) {
       PemesananTiket pemesananTiket = new PemesananTiket();
       Scanner scanner = new Scanner(System.in);

       int pilihan;
       do {
           System.out.println("\nAplikasi Pemesanan Tiket Konser");
           System.out.println("1. Tambah Konser");
           System.out.println("2. Tambah Tiket");
           System.out.println("3. Pesan Tiket");
           System.out.println("4. Tampilkan Daftar Pesanan");
           System.out.println("5. Keluar");
           System.out.print("Pilih menu: ");
           pilihan = scanner.nextInt();
           scanner.nextLine(); 

           switch (pilihan) {
               case 1:
                   System.out.print("Masukkan nama konser: ");
                   String namaKonser = scanner.nextLine();
                   System.out.print("Masukkan tanggal konser: ");
                   String tanggalKonser = scanner.nextLine();
                   Konser konser = new Konser(namaKonser, tanggalKonser);
                   pemesananTiket.tambahKonser(konser);
                   break;
               case 2:
                   System.out.print("Masukkan nomor tiket: ");
                   int nomorTiket = scanner.nextInt();
                   scanner.nextLine(); 
                   System.out.print("Masukkan nama konser: ");
                   String namaKonser2 = scanner.nextLine();
                   Konser konser2 = pemesananTiket.getDaftarKonser().stream()
                           .filter(k -> k.getNama().equals(namaKonser2))
                           .findFirst()
                           .orElse(null);
                   if (konser2 != null) {
                       Tiket tiket = new Tiket(nomorTiket, konser2);
                       pemesananTiket.tambahTiket(tiket);
                   } else {
                       System.out.println("Konser tidak ditemukan.");
                   }
                   break;
               case 3:
                   System.out.print("Masukkan nama pemesan: ");
                   String namaPemesan = scanner.nextLine();
                   System.out.print("Masukkan nomor tiket: ");
                   int nomorTiket2 = scanner.nextInt();
                   scanner.nextLine(); 
                   pemesananTiket.pesanTiket(namaPemesan, nomorTiket2);
                   break;
               case 4:
                   pemesananTiket.tampilkanDaftarPesanan();
                   break;
               case 5:
                   System.out.println("Terima kasih telah menggunakan aplikasi.");
                   break;
               default:
                   System.out.println("Pilihan tidak valid.");
           }
       } while (pilihan != 5);
   }
}

public class Konser{
    private String nama;
    private String tanggal;

    public Konser(String nama, String tanggal){
        this.nama = nama;
        this.tanggal = tanggal;
    }

    public String getNama(){
        return nama;
    }

    public String getTanggal(){
        return tanggal;
    }

    @Override
    public String toString(){
        return  "Konser{" +
        "nama='" + nama + '\'' +
        ", tanggal='" + tanggal + '\'' +
        '}';
    }
}

class Tiket{
    private int nomor;
    private Konser konser;

    public Tiket(int nomor, Konser konser){
        this.nomor = nomor;
        this.konser = konser;
    }

    public int getNomor(){
        return nomor;
    }

    public Konser getKonser(){
        return konser;
    }

     @Override
    public String toString(){
        return "Tiket{" +
                "nomor=" + nomor +
                ", konser=" + konser +
                '}';
    }
}

class Pesanan{
    private String namaPemesanan;
    private Tiket tiket;

    public Pesanan(String namaPemesanan,Tiket tiket){
        this.namaPemesanan = namaPemesanan;
        this.tiket = tiket;
    }

    public String getNamaPemesanan(){
        return namaPemesanan;
    }

    public Tiket getTiket(){
        return tiket;
    }

    @Override
    public String toString(){
        return "Pesanan{" +
                "namaPemesanan='" + namaPemesanan + '\'' +
                ", tiket=" + tiket +
                '}';
    }
}

class PemesananTiket{
    private List<Konser> daftarKonser = new ArrayList<>();
    private List<Tiket> daftarTiket = new ArrayList<>();
    private List<Pesanan> daftarPesanan = new ArrayList<>();

    public PemesananTiket() {}

    public List<Konser> getDaftarKonser(){
        return daftarKonser;
    }

    public void tambahKonser(Konser konser){
        daftarKonser.add(konser);
        System.out.println("Konser berhasil ditambahkan.");
    }

    public void tambahTiket(Tiket tiket){
        daftarTiket.add(tiket);
        System.out.println("Tiket berhasil ditambahkan.");
    }

    public void pesanTiket(String namaPemesan, int nomorTiket){
        Tiket tiket = findTiketByNomor(nomorTiket);
        if (tiket != null) {
            Pesanan pesanan = new Pesanan(namaPemesan, tiket);
            daftarPesanan.add(pesanan);
            System.out.println("Tiket berhasil dipesan.");
        } else {
            System.out.println("Tiket tidak ditemukan.");
        }
    }

    public void tampilkanDaftarPesanan(){
        if (daftarPesanan.isEmpty()) {
            System.out.println("Tidak ada pesanan.");
        } else {
            System.out.println("\n Daftar Pesanan:");
            for (Pesanan pesanan : daftarPesanan) {
                System.out.println("Nama pemesan : " + pesanan.getNamaPemesanan());
                System.out.println("Nomor Tiket : " + pesanan.getTiket().getNomor());
                System.out.println("Nama konser : " + pesanan.getTiket().getKonser().getNama());
                System.out.println("Tanggal Konser : " + pesanan.getTiket().getKonser().getTanggal());
                System.out.println();
            }
        }
    }

    private Tiket findTiketByNomor(int nomor) {
        for (Tiket tiket : daftarTiket) {
            if (tiket.getNomor() == nomor) {
                return tiket;
            }
        }
        return null;
    }
}


