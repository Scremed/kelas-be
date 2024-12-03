@extends('layouts.app')


@section('content')
    @php
        // Single Line Comment
        
        /*
            Multi Line Comment
        */

        echo "<h1>Pertemuan 3</h1>";

        echo "<h2 class=\"text-primary\">Hello, World!</h2>";
    @endphp


    <hr>
    <h2>Variabel</h2>
    <?php 
        $name = "Louis";
        echo "String: $name <br>";
        $age = 19;
        echo "Int: $age <br>";
        $height = 1.65;
        echo "Float: $height <br>";
        $isStudent = true;
        echo "Boolean: $isStudent <br>";

        var_dump($name, $age, $height, $isStudent);

        echo "<br>";
        $age2 = "19";
        var_dump($age2);

        echo "<h3>Type Casting</h3>";
        $age2 = (int) $age2;
        var_dump($age2);
    ?>

    <hr>
    <h2>Arithmetic Operator</h2>
    @php
        $a = 10;
        $b = 3;
    @endphp

    <p>a = {{ $a }}, b = {{ $b }}</p>
    <ul>
        <li>a+b, {{ $a + $b }}</li>
        <li>a-b, {{ $a - $b }}</li>
        <li>a*b, {{ $a * $b }}</li>
        <li>a/b, {{ $a / $b }}</li>
        <li>a%b, {{ $a % $b }}</li>
    </ul>

    <hr>
    <h2>Comparison Operator</h2>
    @php
        $c = "10";
    @endphp
    <p>a = {{ $a }}, c = {{ $c }}</p>

    <ul>
        <li>a==c, {{ var_dump($a == $c) }}</li>
        <li>a===c, {{ var_dump($a === $c) }}</li>
        <li>a!=c, {{ var_dump($a != $c) }}</li>
        <li>a!==c, {{ var_dump($a !== $c) }}</li>
        <li>a < c, {{ var_dump($a < $c) }}</li>
        <li>a>=c, {{ var_dump($a >= $c) }}</li>
    </ul>

    <hr>
    <h2>Logical Operator</h2>
    @php
        $d = true;
        $e = false;
    @endphp
    <p>d = {{ var_dump($d) }}, e = {{ var_dump($e) }}</p>

    <ul>
        <li>OR, {{ var_dump($d||$e) }}</li>
        <li>XOR, {{ var_dump($d^$e) }}</li>
        <li>AND, {{ var_dump($d&&$e) }}</li>
        <li>NOT, {{ var_dump(!$d) }}</li>
    </ul>

    <h2>Conditional</h2>
    @php
        $age = 11;

        $warna = "Biru";
    @endphp
    
    <h3>If... Elseif... else...</h3>
    @if ($age > 18)
        <p>Umur lebih besar dari 18</p>
    @elseif ($age > 10)
        <p>Umur Lebih besar dari 10 dan lebih kecil dari 19</p>
    @else
        <p>Umur kurang dari 11</p>
    @endif

    <h3>Switch Case</h3>
    @switch($warna)
        @case("hitam")
            <p>Warna Hitam</p>
            @break
        @case("Biru")
            <p>Warna Biru</p>
            @break
        @default
            <p>Warna Lain</p>
    @endswitch

    
    <hr>
    <h2>Loop</h2>
    @php
        $arr = [1,2,3,4,5];

        $x = 0;
        echo "<h3>While Loop</h3>";
        while ($x < count($arr)) {
            echo "$arr[$x] <br>";
            $x++;
        }

        $items = [
            "name" => "Louis",
            "age" => 19,
            "height" => 1.65,
            "isStudent" => true
        ];
    @endphp

    <h3>For Loop</h3>
    @for ($i = 0; $i < count($arr); $i++)
        <li>{{ $arr[$i] }}</li>
    @endfor

    <h3>Foreach Loop</h3>
    @foreach ($items as $i)
        {{ $i }} <br>
    @endforeach

    <hr>
    <h2>Pre-Defined Function</h2>
    {{ strlen($name) }} <br>
    {{ max($a, $b) }} <br>
    {{ rand() % 10}} <br>


    <hr>
    <h2>User-Defined Function</h2>
    @php
        function sayHello($name) {
            echo "Hello, $name";
        }

        sayHello("Louis");

        function addition(int $a, int $b) {
            return $a + $b;
        }
    @endphp

    <br>
    {{ sayHello("Budi") }} <br>
    {{ addition(10,8) }} <br>

@endsection