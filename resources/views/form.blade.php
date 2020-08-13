<h1>{{ $title }}</h1>
<form action="/save" method="post">
    @csrf
    姓名<input type="text" name="name"><br>
    年齡<input type="text" name="age"><br>
    學校<input type="text" name="school"><br>
    <button>送出</button>
</form>
@yield("footer")