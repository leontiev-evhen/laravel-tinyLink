<html>
    <body>
        <form method="post" action="{{URL::to('make-url')}}">
            <input type="text" name="url">
            <input type="submit" value="Make URL">
            @if($errors->first('url'))
                <p>{{{$errors->first('url')}}}</p>
            @endif
        </form>
    </body>
</html>
