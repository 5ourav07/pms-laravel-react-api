const Logout = () => {
  localStorage.removeItem('userid');
  return window.location.replace('/');
};

export default Logout;