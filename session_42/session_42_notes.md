# Session 42

## MySQL

MySQL can run multiple storage engines table in a single database.

## Interview Questions

1. What are the MySQL storage engines?
   Solution:

- ISAM
- MyISAM
- MERGE
- InnoDB
- MEMORY (HEAP)
- ARCHIVE
- BDB
- CSV
- FEDERATED

2. Diffrence between MyISAM and InnoDB?
   Soution:

   The major difference between MyISAM and InnoDB is in referential integrity and transactions. There are also other difference such as locking, rollbacks, and full-text searches.

   ### Referential Integrity

   Referential integrity ensures that relationships between tables remains consistent. More specifically, this means when a table (e.g. Listings) has a foreign key (e.g. Product ID) pointing to a different table (e.g. Products), when updates or deletes occur to the pointed-to table, these changes are cascaded to the linking table. In our example, if a product is renamed, the linking table’s foreign keys will also update; if a product is deleted from the ‘Products’ table, any listings which point to the deleted entry will also be deleted. Furthermore, any new listing must have that foreign key pointing to a valid, existing entry.

   InnoDB is a relational DBMS (RDBMS) and thus has referential integrity, while MyISAM does not.

   ### Transactions & Atomicity

   Data in a table is managed using Data Manipulation Language (DML) statements, such as SELECT, INSERT, UPDATE and DELETE. A transaction group two or more DML statements together into a single unit of work, so either the entire unit is applied, or none of it is.

   MyISAM do not support transactions whereas InnoDB does.

   If an operation is interrupted while using a MyISAM table, the operation is aborted immediately, and the rows (or even data within each row) that are affected remains affected, even if the operation did not go to completion.

   If an operation is interrupted while using an InnoDB table, because it using transactions, which has atomicity, any transaction which did not go to completion will not take effect, since no commit is made.

   ### Table-locking vs Row-locking

   When a query runs against a MyISAM table, the entire table in which it is querying will be locked. This means subsequent queries will only be executed after the current one is finished. If you are reading a large table, and/or there are frequent read and write operations, this can mean a huge backlog of queries.

   When a query runs against an InnoDB table, only the row(s) which are involved are locked, the rest of the table remains available for CRUD operations. This means queries can run simultaneously on the same table, provided they do not use the same row.

   This feature in InnoDB is known as concurrency. As great as concurrency is, there is a major drawback that applies to a select range of tables, in that there is an overhead in switching between kernel threads, and you should set a limit on the kernel threads to prevent the server coming to a halt.

   ### Transactions & Rollbacks

   When you run an operation in MyISAM, the changes are set; in InnoDB, those changes can be rolled back. The most common commands used to control transactions are COMMIT, ROLLBACK and SAVEPOINT. 1. COMMIT - you can write multiple DML operations, but the changes will only be saved when a COMMIT is made 2. ROLLBACK - you can discard any operations that have not yet been committed yet 3. SAVEPOINT - sets a point in the list of operations to which a ROLLBACK operation can rollback to

   ### Reliability

   MyISAM offers no data integrity - Hardware failures, unclean shutdowns and canceled operations can cause the data to become corrupt. This would require full repair or rebuilds of the indexes and tables.

   InnoDB, on the other hand, uses a transactional log, a double-write buffer and automatic checksumming and validation to prevent corruption. Before InnoDB makes any changes, it records the data before the transactions into a system tablespace file called ibdata1. If there is a crash, InnoDB would autorecover through the replay of those logs.

   ### FULLTEXT Indexing

   InnoDB does not support FULLTEXT indexing until MySQL version 5.6.4. As of the writing of this post, many shared hosting providers’ MySQL version is still below 5.6.4, which means FULLTEXT indexing is not supported for InnoDB tables.

   However, this is not a valid reason to use MyISAM. It’s best to change to a hosting provider that supports up-to-date versions of MySQL. Not that a MyISAM table that uses FULLTEXT indexing cannot be converted to an InnoDB table.

   ### Conclusion

   In conclusion, InnoDB should be your default storage engine of choice. Choose MyISAM or other data types when they serve a specific need.
