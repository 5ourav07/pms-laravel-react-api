const Header = () => {
  return (
    <div>
      <nav className="main-header navbar navbar-expand navbar-white navbar-light">
        <ul className="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li className="nav-item d-none d-sm-inline-block">
            <a href='/home' className="nav-link">
              Home
            </a>
          </li>
          <li className="nav-item d-none d-sm-inline-block">
            <a href='/profile' className='nav-link'>
              Profile
            </a>
          </li>
          <li className="nav-item d-none d-sm-inline-block">
            <a href='/contactus' className='nav-link'>
              Contact Us
            </a>
          </li>
          <li className="nav-item d-none d-sm-inline-block">
            <a href='/logout' className='nav-link'>
              Logout
            </a>
          </li>
        </ul>
      </nav>
    </div>
  )
}
export default Header;