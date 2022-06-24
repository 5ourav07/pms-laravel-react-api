const Menu = () => {
  return (
    <div>
      <aside className="main-sidebar sidebar-dark-primary elevation-4">
        {/* Brand Logo */}
        <a href="/home" className="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" className="brand-image img-circle elevation-3" style={{ opacity: '.8' }} />
          <span className="brand-text font-weight-light">PMS</span>
        </a>
        {/* Sidebar */}
        <div className="sidebar">
          {/* Sidebar Menu */}
          <nav className="mt-2">
            <ul className="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li className="nav-item">
                <a href="/home" className="nav-link">
                  <i className="nav-icon fas fa-tachometer-alt" />
                  <p>
                    Dashboard
                    <i />
                  </p>
                </a>
              </li>
              <li className="nav-item has-treeview">
                <a href="#" className="nav-link">
                  <i className="nav-icon fas fa-copy" />
                  <p>
                    Users
                    <i className="fas fa-angle-left right" />
                  </p>
                </a>
                <ul className="nav nav-treeview">
                  <li className="nav-item">
                    <a href="#" className="nav-link">
                      <i className="far fa-circle nav-icon" />
                      <p>Pending user</p>
                    </a>
                  </li>
                  <li className="nav-item">
                    <a href="/createuser" className="nav-link">
                      <i className="far fa-circle nav-icon" />
                      <p>Create user</p>
                    </a>
                  </li>
                  <li className="nav-item">
                    <a href="/alluser" className="nav-link">
                      <i className="far fa-circle nav-icon" />
                      <p>All User</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li className="nav-item has-treeview">
                <a href="#" className="nav-link">
                  <i className="nav-icon fas fa-chart-pie" />
                  <p>
                    Projects
                    <i className="right fas fa-angle-left" />
                  </p>
                </a>
                <ul className="nav nav-treeview">
                  <li className="nav-item">
                    <a href="/createproject" className="nav-link">
                      <i className="far fa-circle nav-icon" />
                      <p>Create</p>
                    </a>
                  </li>
                  <li className="nav-item">
                    <a href="/projectlist" className="nav-link">
                      <i className="far fa-circle nav-icon" />
                      <p>Projects</p>
                    </a>
                  </li>
                  <li className="nav-item">
                    <a href="#" className="nav-link">
                      <i className="far fa-circle nav-icon" />
                      <p>Finished</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li className="nav-item has-treeview">
                <a href="#" className="nav-link">
                  <i className="nav-icon fas fa-table" />
                  <p>
                    Tasks
                    <i className="fas fa-angle-left right" />
                  </p>
                </a>
                <ul className="nav nav-treeview">
                  <li className="nav-item">
                    <a href="/createtask" className="nav-link">
                      <i className="far fa-circle nav-icon" />
                      <p>Create</p>
                    </a>
                  </li>
                  <li className="nav-item">
                    <a href="/tasklist" className="nav-link">
                      <i className="far fa-circle nav-icon" />
                      <p>Tasks</p>
                    </a>
                  </li>
                  <li className="nav-item">
                    <a href="#" className="nav-link">
                      <i className="far fa-circle nav-icon" />
                      <p>Finished</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li className="nav-item">
                <a href="/message" className="nav-link">
                  <i className="nav-icon fas fa-tachometer-alt" />
                  <p>
                    Messages
                    <i />
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          {/* /.sidebar-menu */}
        </div>
        {/* /.sidebar */}
      </aside>
    </div>
  )
}
export default Menu;