<?php
$sequence = time() % 100000;  // رقم تسلسلي يتغيّر كل مرة
$segmentDuration = 10;        // مدة المقطع بالثواني
$segmentFile = 'playlist0.ts'; // اسم ملف الفيديو

header("Content-Type: application/vnd.apple.mpegurl");

echo "#EXTM3U\n";
echo "#EXT-X-VERSION:3\n";
echo "#EXT-X-TARGETDURATION:$segmentDuration\n";
echo "#EXT-X-MEDIA-SEQUENCE:$sequence\n";

for ($i = 0; $i < 3; $i++) {
    echo "#EXTINF:$segmentDuration.0,\n";
    echo "$segmentFile\n";
}
