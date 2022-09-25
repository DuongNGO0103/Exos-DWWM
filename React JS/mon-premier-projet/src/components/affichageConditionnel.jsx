import React, { Component } from 'react'

export default class AffichageConditionnel extends React.Component {
    constructor(props){
        super(props)
        this.state = {
            bool:true
        }
    }
  render() {
    // if(this.state.bool){
    // return (<h1>C'est vrai</h1>)
    // }else{
    // return(<h1>C'est Faux</h1>)
    // }
    return(
    <div>{
        this.state.bool?(<h1>C'est Vrai</h1>):
         (<h1>C'est faux</h1>)}
    </div>
    )
  }
}
