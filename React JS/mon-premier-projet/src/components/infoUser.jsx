import React from "react";
export default class infoUser extends React.Component {

    constructor(props) {
        super(props)
    }
    render() {
        return (
            <div>
                <ol>
                    <li>{this.props.firstname}</li>
                    <li>{this.props.lastname}</li>
                </ol>
            </div>
        )
    }

}