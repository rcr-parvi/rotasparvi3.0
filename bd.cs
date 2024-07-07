using System;
using System.Data.SqlClient;

class Program
{
    static void Main()
    {
        // Connection string para o banco de dados local
        string connectionString = @"Data Source=(localdb)\MSSQLLocalDB;Initial Catalog=MeuBancoDeDados;Integrated Security=True";

        using (SqlConnection connection = new SqlConnection(connectionString))
        {
            try
            {
                connection.Open();
                Console.WriteLine("Conexão bem-sucedida!");

                // Comando SQL para criar uma nova tabela
                string createTableQuery = @"
                    CREATE TABLE Clientes (
                        Id INT PRIMARY KEY IDENTITY,
                        Nome NVARCHAR(50) NOT NULL,
                        Email NVARCHAR(50) NOT NULL
                    )";

                using (SqlCommand command = new SqlCommand(createTableQuery, connection))
                {
                    command.ExecuteNonQuery();
                    Console.WriteLine("Tabela criada com sucesso!");
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine("Erro: " + ex.Message);
            }
        }
    }
}
