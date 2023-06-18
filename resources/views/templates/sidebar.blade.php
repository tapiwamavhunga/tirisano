  <div class="sidebar">
  <div class="brand-logo">
    <a href="/"><img src="images/logoi.png" alt="" width="30" /> </a>
  </div>
  <div class="menu">
    <ul>
      <li>
        <a
          href="/dashboard"
          data-toggle="tooltip"
          data-placement="right"
          title="Home"
        >
          <span><i class="bi bi-house"></i></span>
        </a>
      </li>
       <li>
        <a
          href="/orders"
          data-toggle="tooltip"
          data-placement="right"
          title="Travel Recquests"
        >
          <span><i class="bi bi-globe2"></i></span>
        </a>
      </li>
     <!-- <li>
        <a
          href="wallet.html"
          data-toggle="tooltip"
          data-placement="right"
          title="Wallet"
        >
          <span><i class="bi bi-wallet2"></i></span>
        </a>
      </li> -->
      <li>
        <a
          class="setting_"
          href="/user/profile"
          data-toggle="tooltip"
          data-placement="right"
          title="Settings"
        >
          <span><i class="bi bi-gear"></i></span>
        </a>
      </li>
      <li class="logout">
        

        <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="bi bi-power"></i> 
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

      </li>
    </ul>

    <p class="copyright">&#169; <a href="#">Qkit</a></p>
  </div>
</div>
