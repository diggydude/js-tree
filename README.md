# js-tree
A simple data tree structure with search, graphing, and persistent storage functions.

This is a JavaScript version of the PHP script found here:

https://github.com/diggydude/php-tree

This is not a BTree or B+ Tree or any other kind of high-performance n-ary tree. It has more in common with the HTML Document Object Model (DOM).

There are no iterators. Instead, the Tree and Node classes have methods useful for graphing search results and various types of subtrees.

The tree data can be saved to and loaded from localStorage or sessionStorage using the "local://" and "session://" psuedo-protocols. It may also be saved to a file on the server using the provided PHP script. Note that the JavaScript version stores data as JSON, while the PHP version uses PHP's proprietary serialization format, so the data won't be compatible between the two versions. Conversion functions are provided in the PHP script.

While this isn't a "TreeView" script per se, you can style the HTML output to work with some TreeView scripts.

See examples.html and the comments in the PHP version of the code for more details.
