<style type="text/css">
.proses_member {
	width: 375px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
}
.catatan {
	width: 250px;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 10px;
	color: #930;
}
</style>
<div class="proses_member">
  <form id="form1" name="form1" method="post" action="simpan_member.php">
    <table width="100%" border="0">
      <tr>
        <td width="89">Nama</td>
        <td width="10">:</td>
        <td width="241"><label for="namatxt"></label>
        <input name="namatxt" type="text" id="namatxt" size="20" /></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><label for="almtxt">
          <textarea name="almtxt" id="almtxt" cols="25" rows="4"></textarea>
        </label></td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td>:</td>
        <td><label for="tlptxt">
          <input name="tlptxt" type="text" id="tlptxt" size="25" />
        </label></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><label for="emailtxt2"></label>
        <input name="emailtxt" type="text" id="emailtxt2" size="25" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><hr /></td>
      </tr>
      <tr>
        <td>User</td>
        <td>:</td>
        <td><label for="usertxt"></label>
        <input name="usertxt" type="text" id="usertxt" size="20" /></td>
      </tr>
      <tr>
        <td width="89">Password</td>
        <td>:</td>
        <td><label for="pswtxt"></label>
        <input name="pswtxt" type="password" id="pswtxt" size="15" /></td>
      </tr>
      <tr>
        <td width="89">Re Password</td>
        <td>:</td>
        <td><label for="ulgpswtxt"></label>
        <input name="ulgpswtxt" type="password" id="ulgpswtxt" size="15" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="simpanbtn" id="simpanbtn" value="Daftar" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><hr /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><div class="catatan">* Isi data dengan benar, setiap transaksi yang Anda lakukan sangat berpengaruh pada informasi data member yang Anda input untuk pengiriman produk barang yang Anda beli. Terima kasih.</div></td>
      </tr>
    </table>
  </form>
</div>
