<style type="text/css">
.proses_testimonial {
	width: 350px;
	margin-left: 2px;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
}
</style>
<div class="proses_testimonial">
  <form id="form1" name="form1" method="post" action="cek_captcha.php">
    <table width="100%" border="0">
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><label for="namatxt"></label>
        <input name="namatxt" type="text" id="namatxt" size="20" /></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><label for="emailtxt"></label>
        <input name="emailtxt" type="text" id="emailtxt" size="20" /></td>
      </tr>
      <tr>
        <td>Testimonial</td>
        <td>:</td>
        <td><label for="testitxt"></label>
        <textarea name="testitxt" id="testitxt" cols="30" rows="4"></textarea></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><?php include "captcha.php" ?>&nbsp;</td>
      </tr>
    </table>
  </form>
</div>
