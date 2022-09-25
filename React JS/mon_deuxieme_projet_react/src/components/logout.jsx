import React, { Component } from 'react'

export default class Logout extends React.Component {
  render() {
    return (
      <div>
        <button onClick={()=>this.props.handleText()}>LOGOUT</button>
        <p>Déconnectez vous</p>
      </div>
   )
  }
}
