import React from "react";
export default class Bouton extends React.Component{
handleClick=(message)=>{
    console.log(message);
}
render(){
    return(
        <div>
            <button onClick={()=>this.handleClick("tu as cliqué")}>Click Me!</button>
            <button onClick={()=>this.props.handleTexte("Salut à tous")}>{this.props.texte}</button>

</div>
    )
}
}