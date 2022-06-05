<?php
$config['uploadFolder'] = 'uploads/';
$config['fileUploadConfig'] = array(
   'max_size'        => 5120,
   'allowed_types'   => 'jpg|jpeg|png|JPG|JPEG|PNG|WebP|webp',
   'overwrite'       => TRUE,
   'remove_spaces'   => TRUE
);

$config['voiceUploadConfig'] = array(
   'max_size'        => 8192,
   'allowed_types'   => 'mp3|wav|MP3|WAV',
   'overwrite'       => TRUE,
   'remove_spaces'   => TRUE
);

$config['paginationConfig'] = array(
   'per_page'        => 4,
   'num_links'       => 10,
   'full_tag_open'   => '<div class="pagination-box"><ul class="pagination mt-4">',
   'full_tag_close'  => '</ul></div>',
   'cur_tag_open'    => '<li class="pag-item current">',
   'cur_tag_close'   => '</li>',
   'num_tag_open'    => '<li class="pag-item">',
   'num_tag_close'   => '</li>',
   'prev_tag_open'   => '<li class="previous"><i class=""></i>',
   'prev_tag_close'  => '</li>',
   'next_tag_open'   => '<li class="next">',
   'next_tag_close'  => '<i class=""></i></li>'
);

$config['cardID'] = 5;
