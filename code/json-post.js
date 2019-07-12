const data = await fetch(
    "https://dev-dc2019-rest-jsonapi-graphql.pantheonsite.io/jsonapi/node/signature",
    {
      method: "POST",
      headers: {
        Accept: "application/vnd.api+json",
        "Content-Type": "application/vnd.api+json",
        Authorization:
          "Basic RHVtbXlBY2NvdW50OjRyWVFikVhTTmtaM0NudkdhSkZSNnBibg=="
      },
      body: JSON.stringify({
        data: {
          type: "node--signature",
          attributes: {
            title: `${this.state.name}`,
            field_message: `${this.state.message}`,
            field_posted_through: "JSON API"
          }
        }
      })
    }
  );