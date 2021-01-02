@extends('layouts.app', ['title' => 'Hitung Zakat'])

@section('content')
    {{-- source code: https://suckittrees.com/artikel-136/membuat-kalkulator-zakat-dengan-javascript.html --}}
<div class="container">
    <p><strong>Kalkulator Zakat</strong></p>
    <p>Keterangan : </p>
    <ul>
        <li>Masukkanlah Data ( Nominal) Kedalam kotak yang tersedia di samping kanan pada setiap keterangan</li>
        <li>Untuk Mendapatkan<strong> Jumlah Zakat </strong>, anda harus Memasukkan nominal pada baris z. <strong>Harga
                Emas
                Murni Saat ini per Gram</strong> dan Tekan Enter</li>
        <li>Apabila Jumlah Zakat Yang Harus di Bayarkan Bernilai 0, Anda Tidak dikenakan Membayar Zakat, <br />
        </li>
    </ul>
    <form action="" method="post" name="Kalkulator" id="Kalkulator">
        <table cellpadding="0" cellspacing="0" width="50%">
            <tbody>
                <tr style="background-color:#FFFF00">
                    <td colspan="2">
                        <div align="center"><strong>ZAKAT HARTA YANG TELAH TERSIMPAN SATU TAHUN</strong></div>
                    </td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;" width="75%">a. Uang Tunai, Tabungan, Deposito atau sejenisnya</td>
                    <td width="15%">Rp <input name="fa" onchange="calc_simpanan()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">b. Saham atau surat-surat berharga lainnya</td>
                    <td>Rp <input name="fb" onchange="calc_simpanan()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">c. Real Estate (tidak termasuk rumah tinggal yang dipakai sekarang)
                    </td>
                    <td>Rp <input name="fc" onchange="calc_simpanan()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">d. Emas, Perak, Permata atau sejenisnya</td>
                    <td>Rp <input name="fd" onchange="calc_simpanan()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">e. Mobil (lebih dari keperluan pekerjaan anggota keluarga)</td>
                    <td>Rp <input name="fe" onchange="calc_simpanan()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FDE6B0">
                    <td style="padding-left:20px;">f. Jumlah Harta Simpanan (A+B+C+D+E)</td>
                    <td><strong>Rp</strong> <input name="ff" class="fieldzakat" value="0" size="12" readonly="readonly">
                    </td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">g. Hutang Pribadi yg jatuh tempo dalam tahun ini</td>
                    <td>Rp <input name="fg" onchange="calc_simpanan()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FDE6B0">
                    <td style="padding-left:20px;">h. Harta simpanan kena zakat(F-G, jika &amp;gt nisab)</td>
                    <td><strong>Rp</strong> <input name="fh" class="fieldzakat" value="0" size="12" readonly="readonly">
                    </td>
                </tr>
                <tr style="background-color:#66FFFF">
                    <td><b>I. JUMLAH ZAKAT ATAS SIMPANAN YANG WAJIB DIBAYARKAN PER TAHUN (2,5% x H)</b></td>
                    <td><strong>Rp</strong> <input name="z1" class="fieldzakat" value="0" size="12" readonly="readonly">
                    </td>
                </tr>
                <tr style="background-color:#FFFF00">
                    <td colspan="2">
                        <div align="center"><strong>ZAKAT PROFESI</strong></div>
                    </td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">j. Pendapatan / Gaji per Bulan (setelah dipotong pajak)</td>
                    <td>Rp <input name="fj" onchange="calc_profesi()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">k. Bonus/pendapatan lain-lain selama setahun</td>
                    <td>Rp <input name="fk" onchange="calc_profesi()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FDE6B0">
                    <td style="padding-left:20px;">l. Jumlah Pendapatan per Tahun</td>
                    <td><strong>Rp</strong><input name="fl" class="fieldzakat" value="0" size="12" readonly="readonly">
                    </td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">m. Rata-rata pengeluaran rutin per bulan (kebutuhan fisik, air,
                        listrik,
                        pendidikan, kesehatan, transportasi, dll)</td>
                    <td>Rp <input name="fm" onchange="calc_profesi()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">n. Pengeluaran lainnya dalam satu tahun (pendidikan, kesehatan, dll)
                    </td>
                    <td>Rp <input name="fn" onchange="calc_profesi()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FDE6B0">
                    <td style="padding-left:20px;">o. Jumlah Pengeluaran per Tahun (12 x m + n)</td>
                    <td><strong>Rp</strong> <input name="fo" class="fieldzakat" value="0" size="12" readonly="readonly">
                    </td>
                </tr>
                <tr style="background-color:#FDE6B0">
                    <td style="padding-left:20px;">p. Penghasilan kena zakat (L - O , jika &amp;gt nisab)</td>
                    <td><strong>Rp</strong> <input name="fp" class="fieldzakat" value="0" size="12" readonly="readonly">
                    </td>
                </tr>
                <tr style="background-color:#66FFFF">
                    <td style="padding-left:20px;"><b>Q. JUMLAH ZAKAT PROFESI YANG WAJIB DIBAYARKAN PER TAHUN (2,5% X
                            P)</b>
                    </td>
                    <td><strong>Rp</strong> <input name="z2" class="fieldzakat" value="0" size="12" readonly="readonly">
                    </td>
                </tr>
                <tr style="background-color:#FFFF00">
                    <td colspan="2">
                        <div align="center"><strong>ZAKAT HARTA USAHA (PERDAGANGAN / BISNIS LAINNYA)</strong></div>
                    </td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">r. Nilai Kekayaan Perusahaan (termasuk uang tunai, simpanan di bank,
                        real
                        estate, alat produksi, inventori, barang jadi, dll)</td>
                    <td>Rp <input name="fr" onchange="calc_usaha()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">s. Utang perusahaan jatuh tempo</td>
                    <td>Rp <input name="fs" onchange="calc_usaha()" value="0" size="12"></td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">t. Komposisi Kepemilikan (dalam persen)</td>
                    <td><input name="ft" onchange="calc_usaha()" value="100" size="4"> %</td>
                </tr>
                <tr style="background-color:#FDE6B0">
                    <td style="padding-left:20px;">u. Jumlah Bersih Harta Usaha (t% x [r-s])</td>
                    <td> <strong>Rp</strong> <input name="fu" class="fieldzakat" value="0" size="12"
                            readonly="readonly">
                    </td>
                </tr>
                <tr style="background-color:#FDE6B0">
                    <td style="padding-left:20px;">v. Harta usaha kena zakat (u, jika &amp;gt nisab)</td>
                    <td> <strong>Rp</strong> <input name="fv" class="fieldzakat" value="0" size="12"
                            readonly="readonly">
                    </td>
                </tr>
                <tr style="background-color:#FDE6B0">
                    <td style="padding-left:20px;"><b>W. JUMLAH ZAKAT ATAS HARTA USAHA YANG WAJIB DIBAYARKAN PER TAHUN
                            (2,5%
                            X v)</b></td>
                    <td> <strong>Rp</strong> <input name="z3" class="fieldzakat" value="0" size="12"
                            readonly="readonly">
                    </td>
                </tr>
                <tr style="background-color:#66FFFF">
                    <td><b>TOTAL ZAKAT YANG HARUS DIBAYARKAN (I+Q+V)</b></td>
                    <td>
                        <div align="left"> <strong>Rp</strong>
                            <input name="disp_zakat" value="0" size="12" readonly="readonly">
                            <input name="zakat" value="850000" type="hidden">
                    </td>
                </tr>
                <tr style="background-color:#FFFF00">
                    <td colspan="2">
                        <div align="center"><strong>PERHITUNGAN NISAB</strong></div>
                    </td>
                </tr>
                <tr style="background-color:#FFF4DF">
                    <td style="padding-left:20px;">z. <strong>Harga Emas Murni Saat ini per Gram</strong></td>
                    <td>Rp<input name="fz" onchange="calc_simpanan()" value="490000" size="12"></td>
                </tr>
                <tr style="background-color:#66FFFF">
                    <td>Besarnya Nisab (z x 85 gram emas)</td>
                    <td><strong>Rp</strong>
                        <input name="nisab" value="8925000" size="12" readonly="readonly"></td>
                </tr>
            </tbody>
        </table>
    </form>

    <div class="mt-4">
        <a href="{{ route('menus.detail', $item)}}"
            class="btn btn-success w-50">Lanjut ber-Zakat</a>
    </div>
</div>

<script language="JavaScript" type="text/javascript">
    <!--
    function calc_total()
      {
        document.Kalkulator.zakat.value =
        parseFloat(document.Kalkulator.z1.value) +
        parseFloat(document.Kalkulator.z2.value) +
        parseFloat(document.Kalkulator.z3.value);
        document.Kalkulator.disp_zakat.value = document.Kalkulator.zakat.value;
      }
      function calc_nisab()
      {
        var emas = parseInt(document.Kalkulator.fz.value);
        var nisab = emas * 85;
        document.Kalkulator.nisab.value = nisab;
      }
      function calc_simpanan()
      {
        document.Kalkulator.ff.value = 
          parseInt(document.Kalkulator.fa.value) +
          parseInt(document.Kalkulator.fb.value) +
          parseInt(document.Kalkulator.fc.value) +
          parseInt(document.Kalkulator.fd.value) +
          parseInt(document.Kalkulator.fe.value);
        var zakatable =
          parseInt(document.Kalkulator.ff.value) -
          parseInt(document.Kalkulator.fg.value);
        calc_nisab();
        var nisab = document.Kalkulator.nisab.value;
        if (zakatable < nisab){
          zakatable = 0;
        }
        document.Kalkulator.fh.value = zakatable;
        var zakat = 0.025 * zakatable;
        document.Kalkulator.z1.value = zakat;
        calc_total();
      }
      function calc_profesi()
      {
        var pendapatan =
          (12 * parseInt(document.Kalkulator.fj.value)) +
          parseInt(document.Kalkulator.fk.value);
        var pengeluaran =
          (12 * parseInt(document.Kalkulator.fm.value)) +
          parseInt(document.Kalkulator.fn.value);
        var zakatable = pendapatan - pengeluaran;
        document.Kalkulator.fl.value = pendapatan;
        document.Kalkulator.fo.value = pengeluaran;
        calc_nisab();
        var nisab = document.Kalkulator.nisab.value;
        if (zakatable < nisab){
          zakatable = 0;
        }
        document.Kalkulator.fp.value = zakatable;
        var zakat = 0.025 * zakatable;
        document.Kalkulator.z2.value = zakat;
        calc_total();
      }
      function calc_usaha()
      {
        var zakatable =
          0.01 * parseFloat(document.Kalkulator.ft.value) *
          (parseInt(document.Kalkulator.fr.value) -
          parseInt(document.Kalkulator.fs.value));
        document.Kalkulator.fu.value = zakatable;
        calc_nisab();
        var nisab = document.Kalkulator.nisab.value;
        if (zakatable < nisab){
          zakatable = 0;
        }
        document.Kalkulator.fv.value = zakatable;
        var zakat = 0.025 * zakatable;
        document.Kalkulator.z3.value = zakat;
        calc_total();
    }
    -->
</script>
@stop