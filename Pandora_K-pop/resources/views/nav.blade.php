<nav class="navbar navbar-expand navbar-dark young-passion-gradient">

  <a class="navbar-brand" href="/"><i class="fas fa-music mr-1"></i>Pandora K-pop</a>

  <ul class="navbar-nav ml-auto">

    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{route('register')}}">ユーザー登録</a>
    </li>
    @endguest

@guest
<li class="nav-item">
  <a class="nav-link" href="{{route('login')}}">ログイン</a>
</li>
@endguest


@auth

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-music"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <button class="dropdown-item" type="button"
                onclick="location.href=''">
          ランダム曲再生
        </button>
        <div class="dropdown-divider"></div>
        <button class="dropdown-item" type="button"
                onclick="location.href=''">
          聞きたい曲を絞り込む
        </button>
        <div class="dropdown-divider"></div>
        <button class="dropdown-item" type="button"
                onclick="location.href=''">
          ハッシュタグ一覧
        </button>
        <div class="dropdown-divider"></div>
        <button class="dropdown-item" type="button"
                onclick="location.href=''">
         コメント
        </button>
        <div class="dropdown-divider"></div>
        <button form="logout-button" class="dropdown-item" type="submit">
          ログアウト
        </button>
      </div>
    </li>
    <form id="logout-button" method="POST" action="{{route('logout')}}">
      @csrf
    </form>
    <!-- Dropdown -->
@endauth
  </ul>

</nav>
