import React from 'react'
import { Table } from "react-bootstrap"

const Posts = ({ posts, loading }) => {
  if (loading) {
    return <h2>Loading...</h2>;
  }

  return (
    <div>
      <Table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Body</th>
          </tr>
        </thead>
        <tbody>
          {posts.map(post => (
            <tr>
              <td key={post.id}>{post.id}</td>
              <td>{post.name}</td>
              <td>{post.email}</td>
              <td>{post.body}</td>
            </tr>
          ))}

        </tbody>
      </Table>

    </div>


  );
};

export default Posts;
