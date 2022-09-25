import React from "react";
import "../components/assets/css/presentation.css"

export default class Presentation extends React.Component{
    constructor(props){
        super(props);
        this.state ={
            prenom :"Duong",
            nom : "Ngo",
    
            passion: "musique, cinema, football",


        }
    }
    render (){
        return (
            <div>
            <ul>
                <li class="identite">Mon prénom est {this.state.prenom}</li>
                <li calss="identite">Mon nom est {this.state.nom}</li>
                <li class="identite">Mon age est {this.state.age}</li>
                <li class="identite">Mes passions sont {this.state.age}</li>
                <li class="identite"> Mon ami est {this.props.toto}</li>
                <li class="identite"> Mon ami est {this.props.lolo}</li>

            </ul>

            </div>
        )
    }
}