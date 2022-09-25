import React, { Component } from 'react'

export default class Login extends React.Component {
  render() {
    return (
      <div>
        <button onClick={()=>this.props.handleText()}>LOGIN</button>
        <p>Connectez vous</p>
      </div>
   )
  }
}
