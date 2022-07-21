

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>
</head>
<body>
    <form action="{{url('check_answer')}}" method="post">
    @csrf <!-- {{ csrf_field() }} -->
        <h3>{{ $question}}</h3>
        <?php $letter = 'a';?>
        <input type="text" value="{{$count}}" name="question_number" style="display:none">
        @foreach($answers as $answer)
            <h5 id="{{$letter}}"><input type="radio" name="answer" value="{{$answer->answer}}"> {{ $answer->answer }}</h5>

            <?php $letter++;?>
        @endforeach
        @if($wrong == 'y')
            <div class="well" >Incorrect Answer.  The Answer is not {{ $incorrect_answer }}</div>
        @endif
        <input type="submit" value="Next Question">
    </form>

</body>
</html>


