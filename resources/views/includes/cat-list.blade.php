<ul>
    <h3>دسته ها</h3>
    <ul class="satishraj-tree-container" >
        @foreach($supercats as $supercat)
            <li class="tree-li is-child">
                <label for=""></label>
                <span class="text">{{$supercat->fa_name}}</span>
                <ul class="tree-ul">
                    @foreach($categories as $category)
                        @if($category->type == $supercat->eng_name)
                            <li class="tree-li is-child">
                                <label for=""></label>
                                <span class="text"><a href="/category/{{$category->eng_name}}">{{$category->fa_name}}</a></span>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</ul>