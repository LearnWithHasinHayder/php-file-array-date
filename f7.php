<?php 
$samplephpcode =<<<EOL
<?php 
echo "ABCD";
for (\$i=0; \$i<10; \$i++){
    echo \$i;
}
EOL;

file_put_contents('sample.php', $samplephpcode);

