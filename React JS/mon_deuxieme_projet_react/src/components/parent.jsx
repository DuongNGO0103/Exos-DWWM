import React, { Component } from 'react'
import Login from './login';
import Logout from './logout';
export default class Parent extends React.Component {
    //rconst pour faire un constructor
    constructor(props) {
      super(props)
    
      this.state = {
    isLogged:true,
    texte:"Connectez-vous"    
      }
    }
    handleText=() => {
     this.setState({isLogged: !this.state.isLogged});
     this.setState({texte: "Déconnectez-vous"});   
    }
  render() {
    return (
      <div>{
        this.state.isLogged ?
        (<Login handleText = {this.handleText}/>) 
        : (<Logout handleText = {this.handleText}/>)}
      </div>
    )
  }
}
