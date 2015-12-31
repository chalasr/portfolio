describe('Testing all pages to see if they load properly', function() {

  beforeEach(function() {
    _resetVars();
  });

  it('GET /', function(done) {
    expect(_isScopeReset()).to.equal(true);
    _checkIfLoaded('/', done);
  });

  it('GET /fr', function(done) {
    expect(_isScopeReset()).to.equal(true);
    _checkIfLoaded('/fr', done);
  });

});
