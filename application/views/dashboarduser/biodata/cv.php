<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CV - <?= $biodata['name_candidate'] ?></title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
* { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins', sans-serif; }
body { display:flex; flex-direction:row; width:210mm; height:297mm; background:#fff; color:#333; }

.left {
    width:33%;
    background:#333;
    color:#fff;
    padding:36px 26px;
    display:flex;
    flex-direction:column;
    align-items:center;
}

.left img { width:130px; height:130px; object-fit:cover; border-radius:50%; border:3px solid #646464ff; margin-bottom:16px; }
.left h2 { font-size:22px; margin-bottom:6px; text-align:center; line-height:1.3; font-weight:700; }
.biodata-item { font-size:13px; line-height:1.4; margin-bottom:6px; text-align:center; }
.social-links a { color:#fff; text-decoration:none; display:flex; align-items:center; margin-bottom:4px; word-break:break-all; font-size:13px; }
.social-links a svg { margin-right:4px; }

.right {
    width:67%;
    background:#fff;
    padding:25px 30px;
    height:297mm; /* tinggi A4 */
    overflow:hidden; /* lebih dari tinggi akan dipotong */
    display:flex;
    flex-direction:column;
}
.section { margin-bottom:12px; }
.sub-bio { font-size:12px; line-height:1.4; }

.section h3 {
    font-size:16px;
    margin-bottom:6px;
    border-bottom:1px solid #333;
    padding-bottom:2px;
}

.sub-bio {
    font-size:12px;
    line-height:1.3;
    margin-bottom:6px;
}

.sub-bio small {
    font-size:11px;
    color:#555;
}

/* Print Settings */
@page { size:A4; margin:0; }
@media print {
    body { -webkit-print-color-adjust:exact !important; print-color-adjust:exact !important; }
    .left, .right { page-break-inside:avoid; }
}
</style>
</head>
<body>

<!-- KIRI: Biodata & Sosial Media -->
<div class="left">
   
    <?php
        $path = FCPATH . 'uploads/kandidat/profiles/' . $biodata['photo_candidate'];
        $img = (file_exists($path) && is_file($path)) ? base_url('uploads/kandidat/profiles/' . $biodata['photo_candidate']) : base_url('assets/default/file_lido-default-photo.jpg');
    ?>
    <img src="<?= $img ?>">
  <div class="section-title" style="margin-top:20px;">ABOUT ME</div>
    <?php
        $tempat_tanggal = $biodata['birthdate_candidate'] ?? '';
        list($tempat_lahir, $tanggal_lahir) = array_pad(explode(',', $tempat_tanggal,2),2,'');
        $tanggal_formatted = (!empty($tanggal_lahir) && strtotime($tanggal_lahir)) ? date('j F Y', strtotime($tanggal_lahir)) : '-';
        $bulan = ['January'=>'Januari','February'=>'Februari','March'=>'Maret','April'=>'April','May'=>'Mei','June'=>'Juni',
                  'July'=>'Juli','August'=>'Agustus','September'=>'September','October'=>'Oktober','November'=>'November','December'=>'Desember'];
        foreach ($bulan as $en=>$id) { $tanggal_formatted=str_replace($en,$id,$tanggal_formatted); }
        $jenis_kelamin = isset($biodata['jk_candidate']) ? ($biodata['jk_candidate']==1?'LAKI-LAKI':($biodata['jk_candidate']==2?'PEREMPUAN': ($biodata['jk_candidate']==3?'TRANSGENDER':'TIDAK DISEBUTKAN'))):'-';
        $daftar_agama = [1=>'ISLAM',2=>'KRISTEN',3=>'HINDU',4=>'BUDDHA',5=>'KATOLIK'];
        $agama = isset($biodata['religion_candidate']) ? ($daftar_agama[$biodata['religion_candidate']] ?? 'TIDAK DISEBUTKAN') : '-';
    ?>
    <div class="biodata-item"><b>Tempat, Tgl Lahir:</b> <?= strtoupper(trim($tempat_lahir)) . ', ' . $tanggal_formatted ?></div>
    <div class="biodata-item"><b>Jenis Kelamin:</b> <?= $jenis_kelamin ?></div>
    <div class="biodata-item"><b>Alamat:</b> <?= trim(($address['alamat_']??'-').', '.($address['kecamatan']??'-').', '.($address['kabupaten']??'-').', '.($address['provinsi']??'-')) ?></div>
    <div class="biodata-item"><b>Kode Pos:</b> <?= $address['kode_pos']??'-' ?></div>
    <div class="biodata-item"><b>Agama:</b> <?= $agama ?></div>

    <div class="section-title" style="margin-top:20px;">SOCIAL MEDIA LINKS</div>
    <div class="social-links">
    <?php
        $instagram = $biodata['socialmedia_candidate'] ?? '';
        $linkedin = $biodata['socialmedia2_candidate'] ?? '';
        function build_social_url($username,$platform){
            $username=trim($username); if(empty($username)) return '';
            switch($platform){
                case 'instagram': return 'https://www.instagram.com/'.ltrim($username,'@').'/';
                case 'linkedin': return 'https://www.linkedin.com/in/'.ltrim($username,'@');
                default: return $username;
            }
        }
        if(!empty($instagram)){
            $instaUrl=build_social_url($instagram,'instagram');
            echo '<a href="'.htmlspecialchars($instaUrl).'" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E1306C" viewBox="0 0 24 24" style="margin-right:4px;">
                  <path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.9.3 2.4.5.6.2 1 .5 1.5 1s.8.9 1 1.5c.2.5.4 1.2.5 2.4.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.3 1.9-.5 2.4-.2.6-.5 1-1 1.5s-.9.8-1.5 1c-.5.2-1.2.4-2.4.5-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.9-.3-2.4-.5-.6-.2-1-.5-1.5-1s-.8-.9-1-1.5c-.2-.5-.4-1.2-.5-2.4-.1-1.2-.1-1.6-.1-4.8s0-3.6.1-4.8c.1-1.2.3-1.9.5-2.4.2-.6.5-1 1-1.5s.9-.8 1.5-1c.5-.2 1.2-.4 2.4-.5C8.4 2.2 8.8 2.2 12 2.2M12 0C8.7 0 8.3 0 7.1.1 5.9.2 5 .4 4.2.7c-.8.3-1.5.7-2.1 1.3s-1 .8-1.3 2.1c-.3.8-.5 1.7-.6 2.9C0 8.3 0 8.7 0 12s0 3.7.1 4.9c.1 1.2.3 2.1.6 2.9.3.8.7 1.5 1.3 2.1s1.3 1 2.1 1.3c.8.3 1.7.5 2.9.6 1.2.1 1.6.1 4.9.1s3.7 0 4.9-.1c1.2-.1 2.1-.3 2.9-.6.8-.3 1.5-.7 2.1-1.3s1-1.3 1.3-2.1c.3-.8.5-1.7.6-2.9.1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.1-1.2-.3-2.1-.6-2.9-.3-.8-.7-1.5-1.3-2.1S20.7.8 19.9.5c-.8-.3-1.7-.5-2.9-.6C15.7 0 15.3 0 12 0zm0 5.8a6.2 6.2 0 1 0 0 12.4 6.2 6.2 0 0 0 0-12.4zm0 10.2a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-11.5a1.44 1.44 0 1 0 0-2.88 1.44 1.44 0 0 0 0 2.88z"/></svg>';
            echo '@'.htmlspecialchars(ltrim($instagram,'@'));
            echo '</a>';
        }

        if(!empty($linkedin)){
            $linkedinUrl=build_social_url($linkedin,'linkedin');
            echo '<a href="'.htmlspecialchars($linkedinUrl).'" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#0077B5" viewBox="0 0 24 24" style="margin-right:4px;">
                  <path d="M4.98 3.5C3.33 3.5 2 4.84 2 6.5s1.33 3 2.98 3C6.63 9.5 8 8.16 8 6.5S6.63 3.5 4.98 3.5zM2 21h6V9H2v12zm7.5-12H16v1.5h.1c.7-1.2 2.5-2.4 5.1-2.4 5.5 0 6.5 3.6 6.5 8.3V21h-6v-7c0-1.7 0-3.8-2.3-3.8s-2.7 1.8-2.7 3.7V21h-6V9z"/>
                  </svg>';
            echo '@'.htmlspecialchars(ltrim($linkedin,'@'));
            echo '</a>';
        }
        if(empty($instagram)&&empty($linkedin)){ echo '<span>-</span>'; }
    ?>
    </div>
</div>

<!-- KANAN: Pendidikan, Pengalaman Kerja, File Pendukung -->
<div class="right">
  <div class="section">
          <h2><?= strtoupper($biodata['name_candidate']) ?></h2>
    </div>
    <!-- <div class="section">
        <h3>EDUCATION</h3>
        <p class="sub-bio">
            <?= strtoupper($laststudy['jenjang_']??'-') ?> - <?= strtoupper($laststudy['name_school']??'-') ?><br>
            Jurusan: <?= strtoupper($laststudy['jurusan_']??'-') ?><br>
            Tahun: <?= date('Y',strtotime($laststudy['year_first']??date('Y'))) ?> - <?= date('Y',strtotime($laststudy['year_last']??date('Y'))) ?>
        </p>
    </div> -->

    <div class="section">
        <h3>WORK EXPERIENCE</h3>
        <?php if(!empty($experience)): ?>
            <?php foreach($experience as $row): ?>
                <p class="sub-bio">
                    <strong><?= strtoupper($row['name_company']) ?></strong> - <?= strtoupper($row['last_position']) ?><br>
                    <?= $row['first_year'] ?> s/d <?= $row['last_year'] ?: 'Sekarang' ?><br>
                    <small><?= htmlentities($row['description']) ?></small>
                </p>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="sub-bio">Tidak ada data pengalaman kerja.</p>
        <?php endif; ?>
    </div>

      <div class="section">
        <h3>EDUCATION</h3>
        <p class="sub-bio">
            <?= strtoupper($laststudy['jenjang_']??'-') ?> - <?= strtoupper($laststudy['name_school']??'-') ?><br>
            Jurusan: <?= strtoupper($laststudy['jurusan_']??'-') ?><br>
            Tahun: <?= date('Y',strtotime($laststudy['year_first']??date('Y'))) ?> - <?= date('Y',strtotime($laststudy['year_last']??date('Y'))) ?>
        </p>
    </div>

    <div class="section">
        <h3>File Pendukung</h3>
        <p class="sub-bio">
        <?php if(!empty($pendukung)): ?>
            <?php foreach($pendukung as $pd): ?>
                • <?= ucfirst($pd['jenis_file']) ?><br>
            <?php endforeach; ?>
        <?php else: ?>
            Belum ada
        <?php endif; ?>
        </p>
    </div>
</div>

<script>
window.onload=function(){ setTimeout(()=>{ window.print(); },500); }
</script>

</body>
</html>
