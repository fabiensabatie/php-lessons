####################<br>
แบบฝึกหัด 1<br>
####################<br>

<?php
    $a = 1; 
    $b = 2; 
    $c = $a + $b;

    echo $a ."<br>"; // แสดงผล : 
    echo $b ."<br>";  // แสดงผล : 
    echo $c ."<br>";  // แสดงผล : 
?>


####################<br>
แบบฝึกหัด 2<br>
####################<br>

<?php
    $a = 1578764; 
    $b = 22; 
    $b = $b; 
    $a = $b + 22;

    echo $a ."<br>";  // แสดงผล : 
    echo $b ."<br>";  // แสดงผล : 
?>

####################<br>
แบบฝึกหัด 3<br>
####################<br>

<?php
    $a = 11; 
    $b = 22; 
    $c = 33;
    $a = $b + $c;
    $b = $a + $a; 
    $a = $b + $c;
    $c = $a + $b; 

    echo $a ."<br>";  // แสดงผล : 
    echo $b ."<br>";  // แสดงผล : 
    echo $c ."<br>";  // แสดงผล : 
?>


####################<br>
แบบฝึกหัด 4<br>
####################<br>

<?php
    $a = "สวัสดี"; 
    $b = "ลาก่อน"; 
    $c = "แล้วพบกันใหม่";
    $d = "ราตรีสวัสดิ์";

    $d = $a;
    $a = $b;
    $b = $c;
    $c = $d;

    echo $a ."<br>";  // แสดงผล : 
    echo $b ."<br>";  // แสดงผล : 
    echo $c ."<br>";  // แสดงผล : 
    echo $d ."<br>";  // แสดงผล : 
?>


####################<br>
แบบฝึกหัด 5 (ไม่บังคับ)<br>
####################<br>

<?php
    $name = "Kiki";
    $lastname = "Koko";

    echo $name . $lastname ."<br>";  // แสดงผล : 
?>



####################<br>
แบบฝึกหัด 6 (ไม่บังคับ)<br>
####################<br>

<?php
    $name = "Bob";
    $lastname = "Marley";

    echo "สวัสดีทุกคน, ชื่อของฉันคือ " . $name . " " . $lastname ."<br>";  // แสดงผล : 
?>


####################<br>
แบบฝึกหัด 7 (ไม่บังคับ)<br>
####################<br>

<?php
    class Cat {
        public $name = "Garfield";
        public $breed = "Scottish";

        public function meow() {
            echo $this->name . " แมวพันธุ์ " . $this->breed . " เพิ่งร้องเมี๊ยว!" ."<br>"; 
        }
    }

    $myCat = new Cat();
    echo $myCat->name ."<br>";  // แสดงผล: 

    $myCat->meow(); // แสดงผล: 
?>