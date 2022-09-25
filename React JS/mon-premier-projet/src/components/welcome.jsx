import React from "react";
import './assets/css/welcome.css';
import Presentation from "./Presentation.jsx";
import InfoUser from "./infoUser";
import Bouton from "./bouton";
export default class Welcome extends React.Component {
    constructor(props){
        super(props);
        this.state={
        utilisateurs:[
            {nom:"Ngo",prenom:"Duong"},
            {nom:"TOTO",prenom:'Dupont'},
            {nom:"Thomas", prenom:"Truc"}
        ],
    texte:"Bonjour tout le monde"
        }
    
    }
    handleTexte = (message) =>{
        this.setState({texte:message});
    }
    componentDidMount(){
        this.setState({name:'Duong'})
    }
    render(){
        return (
            <div>
                {this.state.utilisateurs.map(function(users){
                    return(<InfoUser firstname={users.prenom} lastname={users.nom}/>)
                })
                }
                <Bouton texte={this.state.texte} handleTexte={this.handleTexte}>

                </Bouton>
                <h1>Bonjour {this.state.name}!</h1>
            </div>
        )

    }
}