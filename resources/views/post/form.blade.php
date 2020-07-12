
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value={{old('title')?? $post->title?? ""}}>
    <div class="error"> {{$errors->first('title')}}</div><p></p>
    <label for="title">Name</label>
    <input type="text" name="content" id="content" value={{old('content') ?? $post->content??""}}>
    <div class="error"> {{$errors->first('content')}}</div><p></p>
    <label for="title">author</label>
    <input type="text" name="author" id="author" value={{old('author')?? $post->author?? ""}}>

{{--    <select name="Author" id="author">--}}
{{--        @foreach($customers as $customer)--}}
{{--            <option value="{{$customer->id}}"> {{$customer->name}}</option>--}}
{{--            @endforeach--}}
{{--    </select>--}}
    <div class="error"> {{$errors->first('author')}}</div><p></p>
    <input type="submit" value="add"><p></p>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
    <div class="error">{{$errors->first('image')}}</div>

