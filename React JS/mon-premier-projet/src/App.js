import logo from './logo2.svg';
import './App.css';
import Welcome from './components/welcome';
import AffichageConditionnel from './components/affichageConditionnel';

function App() {
  return (
    <div className="App">
      <header className="App-header">
     
        <Welcome/>
      <AffichageConditionnel/>
      </header>
    </div>
  );
}

export default App;
