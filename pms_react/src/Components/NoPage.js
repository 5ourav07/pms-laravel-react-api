import { Link } from 'react-router-dom';

const NoPage = () => {
  return (
    <div className='jumbotron jumbotron-fluid'>
      <div className='container d-flex justify-content-center'>
        <div className='inner-container'>
          <h1 className='display-1'>Error</h1>
          <p className='lead'>Page can't be found.</p>
          <Link to='/' className='btn btn-primary'>
            Back to home
          </Link>
        </div>
      </div>
    </div>
  );
};

export default NoPage;